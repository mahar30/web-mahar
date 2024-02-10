<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class KeranjangForm extends ModalComponent
{
    public $keranjang, $jumlah, $status, $barang_id, $ukuran_id, $user_id, $keranjang_id, $user, $barang;
    
    public function render()
    {
        
        $keranjang = Keranjang::all();
        $user = User::all();
        $barang = Barang::all();    
        return view('livewire.keranjang-form', compact('keranjang', 'user', 'barang'));
    }


    public function store()
    {
        $this->validate([
            'jumlah' => 'required',
            'status' => 'required',
            'barang_id' => 'required',
            'ukuran_id' => 'required',
            'user_id' => 'required',
        ]);

        Keranjang::updateOrCreate(['id' => $this->keranjang_id], [
            'jumlah' => $this->jumlah,
            'status' => $this->status,
            'barang_id' => $this->barang_id,
            'ukuran_id' => $this->ukuran_id,
            'user_id' => $this->user_id,
        ]);

        session()->flash('message', $this->keranjang_id ? 'Keranjang Updated Successfully.' : 'Keranjang Created Successfully.');

        $this->resetCreateForm();
    }

    public function resetinput(){
        $this->jumlah = '';
        $this->status = '';
        $this->barang_id = '';
        $this->ukuran_id = '';
        $this->user_id = '';
    }

    public function mount($rowId = null)
    {
        $keranjang = Keranjang::all();
        $user = User::all();
        $barang = Barang::all();
        if(!is_null($rowId)){
            $keranjang = Keranjang::findOrFail($rowId);
            $this->keranjang_id = $keranjang->id;
            $this->jumlah = $keranjang->jumlah;
            $this->status = $keranjang->status;
            $this->barang_id = $keranjang->barang_id;
            $this->ukuran_id = $keranjang->ukuran_id;
            $this->user_id = $keranjang->user_id;
        }
    }

}
