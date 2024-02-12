<?php

namespace App\Livewire;

use App\Models\Detailpembeli;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class DetailPembeliForm extends ModalComponent
{
    use Toastable;

    public Detailpembeli $detailpembeli;
    public $user_id, $alamat, $no_wa, $user;

    public function render()
    {
        $users = User::all();
        return view('livewire.detailpembeli-form', compact('users'));
    }

    public function resetCreateForm()
    {
        $this->user_id = '';
        $this->alamat = '';
        $this->no_wa = '';
    }

    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'alamat' => 'required',
        'no_wa' => 'required',
    ];

    public function store()
    {
        $validatedData = $this->validate();
        $this->detailpembeli->fill($validatedData);
        $this->detailpembeli->save();
        $this->success($this->detailpembeli->wasRecentlyCreated ? 'Detail Pembeli berhasil ditambahkan' : 'Detail Pembeli berhasil diubah');
        $this->closeModalWithEvents([DetailpembeliTable::class => 'detailpembeliUpdated']);
        $this->resetCreateForm();
    }

    public function mount($rowId = null)
    {
        $this->detailpembeli = $rowId ? Detailpembeli::find($rowId) : new Detailpembeli();
        if ($this->detailpembeli->exists) {
            $this->user_id = $this->detailpembeli->user_id;
            $this->alamat = $this->detailpembeli->alamat;
            $this->no_wa = $this->detailpembeli->no_wa;
        }
    }
}
