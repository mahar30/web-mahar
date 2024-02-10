<?php

namespace App\Livewire;

use App\Models\Pembayaran;
use App\Models\Rekening;
use App\Models\Transaksi;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class PembayaranForm extends ModalComponent
{
    public $pembayaran, $transaksi_id, $user_id, $rekening_id, $no_rekening, $foto, $total, $nama_rekening, $status, $user, $rekening, $transaksi, $id;
    public function render()
    {
        $pembayaran = Pembayaran::all();
        $user = User::all();
        $rekening = Rekening::all();
        $transaksi = Transaksi::all();
        return view('livewire.pembayaran-form', compact('user', 'rekening', 'transaksi', 'pembayaran'));
    }

    public function resetCreateForm()
    {
        $this->transaksi_id = '';
        $this->user_id = '';
        $this->rekening_id = '';
        $this->no_rekening = '';
        $this->foto = '';
        $this->total = '';
        $this->nama_rekening = '';
        $this->status = '';
    }

    public function store()
    {
        $this->validate([
            'transaksi_id' => 'required',
            'user_id' => 'required',
            'rekening_id' => 'required',
            'foto' => 'required',
            'nama_rekening' => 'required',

        ]);

        Pembayaran::create([
            'transaksi_id' => $this->transaksi_id,
            'user_id' => $this->user_id,
            'rekening_id' => $this->rekening_id,
            'foto' => $this->foto,
            'nama_rekening' => $this->nama_rekening,
        ]);
        $this->resetInput();

        if ($this->id) {
            $pembayaran = Pembayaran::find($this->id);
            $pembayaran->update([
                'transaksi_id' => $this->transaksi_id,
                'user_id' => $this->user_id,
                'rekening_id' => $this->rekening_id,
                'foto' => $this->foto,
                'nama_rekening' => $this->nama_rekening,
            ]);
        } else {
            $pembayaran = Pembayaran::create([
                'transaksi_id' => $this->transaksi_id,
                'user_id' => $this->user_id,
                'rekening_id' => $this->rekening_id,
                'foto' => $this->foto,
                'nama_rekening' => $this->nama_rekening,
            ]);
        }
    }

    public function mount($rowId = null)
    {

        $this->pembayaran= Pembayaran::all();
        $this->user = User::all();
        $this->rekening = Rekening::all();

        if (!is_null($rowId)) {
            $pembayaran = Pembayaran::findOrFail($rowId);
            $this->id = $rowId;
            $this->transaksi_id = $pembayaran->transaksi_id;
            $this->user_id = $pembayaran->user_id;
            $this->rekening_id = $pembayaran->rekening_id;
            $this->foto = $pembayaran->foto;
            $this->nama_rekening = $pembayaran->nama_rekening;
        }
    }
}
