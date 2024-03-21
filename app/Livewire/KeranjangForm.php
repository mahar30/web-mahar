<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Ukuran;
use App\Models\UkuranCustom;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class KeranjangForm extends ModalComponent
{
    use Toastable;

    public Keranjang $keranjang;
    public $user, $barang, $ukuran, $ukuran_custom, $jumlah, $barang_id, $ukuran_id, $user_id, $keranjang_id, $ukuran_custom_id, $user_name, $barang_name, $ukuran_name, $ukuran_custom_name, $panjang, $lebar, $tinggi, $harga, $hargaCustom, $keterangan;
    public $tipe_ukuran = '';

    public function render()
    {
        $ukuran_custom = UkuranCustom::all();
        return view('livewire.keranjang-form', compact('ukuran_custom'));
    }

    public function rules()
    {
        $rules = [
            'barang_id' => 'required|exists:barang,id',
            'user_id' => 'required|exists:users,id',
            'jumlah' => 'required|numeric|min:1',
            'tipe_ukuran' => 'required',
            'keterangan' => 'nullable|string|max:255'
        ];

        if ($this->tipe_ukuran === 'standar') {
            $rules['ukuran_id'] = 'required|exists:ukuran,id';
        } else if ($this->tipe_ukuran === 'custom') {
            $rules['panjang'] = 'required|numeric|min:1|max:600';
            $rules['lebar'] = 'required|numeric|min:1|max:250';
            $rules['tinggi'] = 'required|numeric|min:1|max:250';
            $rules['hargaCustom'] = 'required|numeric|min:1';
        }

        return $rules;
    }


    public function resetinput()
    {
        $this->user_id = '';
        $this->barang_id = '';
        $this->jumlah = '';
        $this->ukuran_id = '';
        $this->ukuran_custom_id = '';
        $this->panjang = '';
        $this->lebar = '';
        $this->tinggi = '';
        $this->tipe_ukuran = '';
    }

    public function store()
    {
        $validated = $this->validate();
        $this->keranjang->fill($validated);


        if ($this->tipe_ukuran === 'standar') {

            $ukuran = Ukuran::find($this->ukuran_id);

            // Pengecekan stok
            if ($ukuran->stock < $this->jumlah) {
                $this->error('Stok tidak mencukupi');
                return; // Hentikan eksekusi lebih lanjut
            }
            $this->keranjang->ukuran_custom_id = null;

            $ukuran->stock -= $this->jumlah;
            $ukuran->save();
        } else {
            $this->keranjang->ukuran_id = null;
            $ukuranCustom = UkuranCustom::create([
                'barang_id' => $this->barang_id,
                'panjang' => $this->panjang,
                'lebar' => $this->lebar,
                'tinggi' => $this->tinggi,
                'harga' => $this->hargaCustom
            ]);

            $this->keranjang->ukuran_custom_id = $ukuranCustom->id;
        }

        $this->keranjang->save();
        $this->success('Data Keranjang berhasil disimpan');

        $this->closeModal();
        $this->resetinput();
    }

    public function mount($barang_id = null)
    {
        // Tetap pertahankan pengambilan user ID
        $this->user_id = auth()->user()->id;
        $this->user_name = auth()->user()->name;

        if ($barang_id) {
            // Menginisialisasi keranjang baru
            $this->keranjang = new Keranjang();

            // Mengisi data barang
            $this->barang_id = $barang_id;
            $this->barang = Barang::find($barang_id);
            $this->barang_name = $this->barang->nama_barang;

            // Mengambil data ukuran
            $this->ukuran = Ukuran::with('barang')->where('barang_id', $barang_id)->get();

            // Menginisialisasi variabel lainnya
            $this->ukuran_id = null;
            $this->ukuran_custom_id = null;
            $this->jumlah = null;
            $this->panjang = null;
            $this->lebar = null;
            $this->tinggi = null;
            $this->tipe_ukuran = null;
        }
    }


    public function getHarga()
    {
        if ($this->ukuran_id) {
            $ukuran = Ukuran::find($this->ukuran_id);
            $this->harga = $ukuran->harga; // Dapatkan harga berdasarkan ukuran yang dipilih
        } else {
            $this->harga = null; // Reset harga jika tidak ada ukuran yang dipilih
        }
    }

    public function hitungHargaCustom()
    {
        // Penambahan validasi ukuran melebihi batas maksimal
        if ($this->panjang > 600 || $this->lebar > 250 || $this->tinggi > 250) {
            $this->error('Ukuran melebihi batas maksimal');
            return;
        }

        $ukurans = Ukuran::where('barang_id', $this->barang_id)->get();
        foreach ($ukurans as $ukuran) {
            if ($this->panjang == $ukuran->panjang && $this->lebar == $ukuran->lebar && $this->tinggi == $ukuran->tinggi) {
                $this->error('Ukuran tidak boleh sama dengan ukuran standar');
                return;
            }
        }

        if ($this->panjang && $this->lebar && $this->tinggi) {
            // Get the smallest and largest standard sizes for the item
            $smallestSize = Ukuran::where('barang_id', $this->barang_id)->orderBy('panjang', 'asc')->orderBy('lebar', 'asc')->orderBy('tinggi', 'asc')->first();
            $largestSize = Ukuran::where('barang_id', $this->barang_id)->orderBy('panjang', 'desc')->orderBy('lebar', 'desc')->orderBy('tinggi', 'desc')->first();

            // Calculate the volume of the custom size
            $volumeCustom = $this->panjang * $this->lebar * $this->tinggi;

            // Calculate the volume of the smallest and largest standard sizes
            $volumeSmallest = $smallestSize->panjang * $smallestSize->lebar * $smallestSize->tinggi;
            $volumeLargest = $largestSize->panjang * $largestSize->lebar * $largestSize->tinggi;

            // Compare the volume of the custom size with the standard sizes and adjust the price accordingly
            if ($volumeCustom > $volumeLargest) {
                $this->hargaCustom = $largestSize->harga + 100000;
            } else if ($volumeCustom < $volumeSmallest) {
                $this->hargaCustom = $smallestSize->harga - 100000;
            } else {
                $this->hargaCustom = null; // Reset harga if the custom size is within the range of the standard sizes
            }
        } else {
            $this->hargaCustom = null; // Reset harga if input is not complete
        }
    }
}
