<?php

namespace App\Livewire;

use App\Models\Detailpembeli;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DetailPembeliForm extends ModalComponent
{
    public $detailpembeli, $user_id, $alamat, $no_wa, $tanggaltransaksi_teraakhir, $user, $id;
    public function render()
    {
        $users = User::all();
        $detailpembeli = Detailpembeli::all();
        return view('livewire.detail-pembeli-form', compact('users', 'detailpembeli'));
    }

    public function resetCreateForm()
    {
        $this->user_id = '';
        $this->alamat = '';
        $this->no_wa = '';
        $this->tanggaltransaksi_teraakhir = '';
    }

    public function store()
    {
        $this->validate([
            'user_id' => 'required',
            'alamat' => 'required',
            'no_wa' => 'required',
            'tanggaltransaksi_teraakhir' => 'required',
        ]);

        Detailpembeli::create([
            'user_id' => $this->user_id,
            'alamat' => $this->alamat,
            'no_wa' => $this->no_wa,
            'tanggaltransaksi_teraakhir' => $this->tanggaltransaksi_teraakhir,
        ]);
        $this->resetInput();

        if ($this->id) {
            $detailpembeli = Detailpembeli::find($this->id);
            $detailpembeli->update([
                'user_id' => $this->user_id,
                'alamat' => $this->alamat,
                'no_wa' => $this->no_wa,
                'tanggaltransaksi_teraakhir' => $this->tanggaltransaksi_teraakhir,
            ]);
        }
        else {
            $detailpembeli = Detailpembeli::create([
                'user_id' => $this->user_id,
                'alamat' => $this->alamat,
                'no_wa' => $this->no_wa,
                'tanggaltransaksi_teraakhir' => $this->tanggaltransaksi_teraakhir,
            ]);
        }
    }

    public function mount($rowId = null){

        $this->detailpembeli = Detailpembeli::all();
        $this->user = User::all();
        if(!is_null($rowId)){
            $detailpembeli = Detailpembeli::find($rowId);
            $this->id = $rowId;
            $this->user_id = $detailpembeli->user_id;
            $this->alamat = $detailpembeli->alamat;
            $this->no_wa = $detailpembeli->no_wa;
            $this->tanggaltransaksi_teraakhir = $detailpembeli->tanggaltransaksi_teraakhir;

        }

    }

}
