<?php

namespace App\Livewire;

use App\Models\Pembayaran;
use App\Models\Rekening;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
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
        'rekening_id' => 'required|rekening,id',
        'foto' => 'required',
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
        $validated = $this->validate();
        $this->pembayaran->fill($validated);
        $this->pembayaran->save();

        $this->success($this->pembayaran->wasRecentlyCreated ? 'Pembayaran berhasil dibuat' : 'Pembayaran berhasil diubah');

        $this->closeModalWithEvents([
            PembayaranTable::class => 'pembayaranUpdated'
        ]);
    }

    public function mount($rowId = null, $updatingStatusOnly = false, $transaksi_id = null)
    {
        $this->updatingStatusOnly = $updatingStatusOnly;
        $this->user = User::all();
        $this->rekening = Rekening::all();
        if ($rowId) {
            $this->pembayaran = Pembayaran::find($rowId);

            if ($updatingStatusOnly) {
                $this->updatingStatusOnly = $this->pembayaran->status;
            }
            $this->transaksi_id = Transaksi::find($transaksi_id)->id;
            $this->user_id = $this->pembayaran->user_id;
            $this->rekening_id = $this->pembayaran->rekening_id;
            if ($this->pembayaran->foto) {
                $this->foto_url = Storage::disk('public')->url($this->pembayaran->foto);
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
