<?php

namespace App\Livewire;

use App\Models\Transaksi;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class TransaksiForm extends ModalComponent
{
    use Toastable;

    public Transaksi $transaksi;
    public $user, $id, $user_id, $total_harga, $tipe_pembayaran, $status;

    public $updatingStatusOnly = false;

    public function render()
    {
        $user = User::all();
        return view('livewire.transaksi-form', compact('user'));
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
        if ($this->updatingStatusOnly) {
            $validated = $this->validate(['status' => 'required']);
            $this->transaksi->status = $validated['status'];
        } else {
            $validated = $this->validate();
            $this->transaksi->fill($validated);
        }
        // $validated = $this->validate();
        // $this->transaksi->fill($validated);
        $this->transaksi->save();

        $this->success($this->transaksi->wasRecentlyCreated ? 'Transaksi berhasil fibuat' : 'Transaksi berhasil diubah');

        $this->closeModalWithEvents([
            TransaksiTable::class => 'transaksiUpdated'
        ]);
    }

    public function mount($rowId = null, $updatingStatusOnly = false)
    {
        $this->updatingStatusOnly = $updatingStatusOnly;
        $this->user = User::all();
        if ($rowId) {
            $this->transaksi = Transaksi::find($rowId);

            if ($updatingStatusOnly) {
                $this->status = $this->transaksi->status;
            }
            $this->user_id = $this->transaksi->user_id;
            $this->total_harga = $this->transaksi->total_harga;
            $this->tipe_pembayaran = $this->transaksi->tipe_pembayaran;
        }
    }
}
