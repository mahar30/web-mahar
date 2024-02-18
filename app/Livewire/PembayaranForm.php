<?php

namespace App\Livewire;

use App\Models\Pembayaran;
use App\Models\Rekening;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class PembayaranForm extends ModalComponent
{
    use Toastable;
    use WithFileUploads;

    public Pembayaran $pembayaran;

    public $transaksi_id, $user_id, $rekening_id, $foto, $status, $user, $rekening, $transaksi, $foto_url, $user_nama, $akun_nasabah, $nama_pemilik;
    public $updatingStatusOnly = false;

    public function render()
    {
        $user = User::all();
        $rekening = Rekening::all();
        $transaksi = Transaksi::all();
        return view('livewire.pembayaran-form', compact('user', 'rekening', 'transaksi'));
    }

    public function switchToStatusOnlyMode()
    {
        $this->updatingStatusOnly = true;
    }

    public function switchToCreateOrUpdateMode()
    {
        $this->updatingStatusOnly = false;
    }

    protected $rules = [
        'transaksi_id' => 'required|exists:transaksi,id',
        'user_id' => 'required|exists:users,id',
        'rekening_id' => 'required|exists:rekening,id',
        'foto' => 'required|image|max:2048|mimes:jpg,jpeg,png,gif,webp,svg',
        'status' => 'required',
    ];

    public function resetCreateForm()
    {
        $this->transaksi_id = '';
        $this->user_id = '';
        $this->rekening_id = '';
        $this->foto = '';
        $this->status = '';
    }

    public function store()
    {
        // Jika ini hanya pembaruan status, validasi hanya field status
        if ($this->updatingStatusOnly) {
            $validatedData = $this->validate([
                'status' => 'required',
            ]);
            $this->pembayaran->status = $validatedData['status'];
            $this->pembayaran->save();

            Log::info('Status pembayaran berhasil diubah.');
            $this->success('Status pembayaran berhasil diubah.');
        } else {
            // Jika bukan hanya pembaruan status, validasi semua field yang diperlukan
            $validatedData = $this->validate();

            // Cek apakah ada pembayaran yang sudah ada dengan transaksi_id yang sama
            $existingPembayaran = Pembayaran::where('transaksi_id', $this->transaksi_id)->first();

            if ($existingPembayaran) {
                // Jika pembayaran lama ditemukan, hapus file terkait dan rekamannya
                Storage::disk('public')->delete($existingPembayaran->foto);
                $existingPembayaran->delete();
                Log::info('Pembayaran lama berhasil dihapus.');
            }

            // Proses upload foto baru jika ada
            if (!empty($this->foto)) {
                $validatedData['foto'] = $this->foto->store('foto-pembayaran', 'public');
            }

            // Buat pembayaran baru dan isi data
            $this->pembayaran = new Pembayaran($validatedData);
            $this->pembayaran->save();

            Log::info('Pembayaran baru berhasil disimpan.');
            $this->success('Pembayaran berhasil disimpan.');
        }

        $this->closeModalWithEvents([
            PembayaranTable::class => 'pembayaranUpdated',
        ]);

        if (!$this->updatingStatusOnly) {
            redirect()->route('pembayaran');
        }
    }

    public function mount($rowId = null, $updatingStatusOnly = false, $transaksi_id = null)
    {
        $this->updatingStatusOnly = $updatingStatusOnly;
        $this->user = User::all();
        $this->rekening = Rekening::all();
        if ($rowId) {
            $this->pembayaran = Pembayaran::find($rowId);

            if ($updatingStatusOnly) {
                $this->status = $this->pembayaran->status;
            }
        }

        if ($transaksi_id) {
            $existingPembayaran = Pembayaran::where('transaksi_id', $transaksi_id)->first();
            if ($existingPembayaran) {
                $this->pembayaran = $existingPembayaran;
                $this->transaksi_id = $transaksi_id;
                $this->user_id = auth()->user()->id;
                $this->status = 'Proses Verifikasi';
            } else {
                $this->pembayaran = new Pembayaran();
                $this->transaksi_id = $transaksi_id;
                $this->user_id = auth()->user()->id;
                $this->status = 'Proses Verifikasi';
            }

            if ($this->foto) {
                $this->foto_url = Storage::disk('public')->url($this->foto);
            }
        }
    }

    public function getRekeningDetails($rekeningId)
    {
        // Cari data rekening berdasarkan id
        $rekening = Rekening::find($rekeningId);

        // Jika data ditemukan, isi property
        if ($rekening) {
            $this->akun_nasabah = $rekening->no_rekening;
            $this->nama_pemilik = $rekening->nama_rekening;
        } else {
            // Reset property jika data tidak ditemukan
            $this->akun_nasabah = null;
            $this->nama_pemilik = null;
        }
    }
}
