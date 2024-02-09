<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Ukuran;
use Livewire\Component;

class UkuranForm extends Component
{
    public $ukuran, $ukuran_id, $barang, $barang_id, $nama_ukuran, $stock, $harga;


    public function render()
    {
        $ukuran = Ukuran::all();
        $barang = Barang::all();

        return view('livewire.ukuran-form', compact('ukuran', 'barang'));
    }


    public function store()
    {
        $this->validate([
            'barang_id' => 'required',
            'nama_ukuran' => 'required',
            'stock' => 'required',
            'harga' => 'required',
        ]);

        Ukuran::updateOrCreate(['id' => $this->ukuran_id], [
            'barang_id' => $this->barang_id,
            'nama_ukuran' => $this->nama_ukuran,
            'stock' => $this->stock,
            'harga' => $this->harga,
        ]);

        // session()->flash('message', $this->ukuran_id ? 'Ukuran berhasil diupdate' : 'Ukuran berhasil ditambahkan');
        $this->resetInputFields();
    }

    public function resetimput()
    {
        $this->ukuran_id = '';
        $this->barang_id = '';
        $this->nama_ukuran = '';
        $this->stock = '';
        $this->harga = '';
    }

    public function mount($id)
    {
        $ukuran = Ukuran::find($id);
        $barang = Barang::all();
        if (!is_null($ukuran)) {
            $this->ukuran_id = $ukuran->id;
            $this->barang_id = $ukuran->barang_id;
            $this->nama_ukuran = $ukuran->nama_ukuran;
            $this->stock = $ukuran->stock;
            $this->harga = $ukuran->harga;
        }
    }

}
