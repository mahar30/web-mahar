<?php

namespace App\Livewire;

use App\Models\Transaksi;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class TransaksiForm extends ModalComponent
{
    public Transaksi $transaksi;
    public $user, $id, $user_id, $total_harga, $tipe_pembayaran, $status;

    public $updateingStatusOnly = false;

    public function render()
    {
        $user = User::all();
        return view('livewire.transaksi-form', compact('user'));
    }

    public function switchToStatusOnlyMode()
    {
        $this->updateingStatusOnly = true;
    }

    public function switchToCreateOrUpdateMode()
    {
        $this->updateingStatusOnly = false;
    }

    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'total_harga' => 'required',
        'tipe_pembayaran' => 'required',
        'status' => 'required',
    ];

    public function resetCreateForm()
    {
        $this->user_id = '';
        $this->total_harga = '';
        $this->tipe_pembayaran = '';
        $this->status = '';
    }

    public function store()
    {
        $validated = $this->validate();
        $this->transaksi->fill($validated);
        $this->transaksi->save();

        $this
    }

    public function mount($rowId = null, $updateingStatusOnly = false)
    {
        $this->updateingStatusOnly = $updateingStatusOnly;
        if ($rowId) {
            $this->transaksi = Transaksi::find($rowId);
            $this->user_id = $this->transaksi->user_id;
            $this->total_harga = $this->transaksi->total_harga;
            $this->tipe_pembayaran = $this->transaksi->tipe_pembayaran;
            $this->status = $this->transaksi->status;
        }
    }
}
