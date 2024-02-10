<?php

namespace App\Livewire;

use App\Models\Transaksi;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class TransaksiForm extends ModalComponent
{
    public $user, $id, $user_id, $transaksi, $kode_transaksi, $total_harga, $tipe_pembayaran, $total_pembelian, $status;
    public function render()
    {
        $user = User::all();
        $transaksi = Transaksi::all();
        return view('livewire.transaksi-form', compact('user', 'transaksi'));
    }

    public function resetCreateForm()
    {
        $this->user_id = '';
        $this->kode_transaksi = '';
        $this->total_harga = '';
        $this->tipe_pembayaran = '';
        $this->total_pembelian = '';
        $this->status = '';
    }

    public function store()
    {
        $this->validate([
            'user_id' => 'required',
            'kode_transaksi' => 'required',
            'total_harga' => 'required',
            'tipe_pembayaran' => 'required',
            'total_pembelian' => 'required',
            'status' => 'required',
        ]);

        Transaksi::create([
            'user_id' => $this->user_id,
            'kode_transaksi' => $this->kode_transaksi,
            'total_harga' => $this->total_harga,,
            'tipe_pembayaran' => $this->tipe_pembayaran,
            'total_pembelian' => $this->total_pembelian,
            'status' => $this->status,
        ]);
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->user_id = '';
        $this->kode_transaksi = '';
        $this->total_harga = '';
        $this->tipe_pembayaran = '';
        $this->total_pembelian = '';
        $this->status = '';
    }

    public function mount($id)
    {
        $this->user = User::all();
        $this-> transaksi = Transaksi::all();
        if(!is_null($id)){
            $transaksi = Transaksi::find($id);
            $this->id = $id;
            $this->user_id = $transaksi->user_id;
            $this->kode_transaksi = $transaksi->kode_transaksi;
            $this->total_harga = $transaksi->total_harga;
            $this->tipe_pembayaran = $transaksi->tipe_pembayaran;
            $this->total_pembelian = $transaksi->total_pembelian;
            $this->status = $transaksi->status;
        }
    }
}
