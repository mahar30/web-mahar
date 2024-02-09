<?php

namespace App\Livewire;

use App\Models\Rekening;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class RekeningForm extends ModalComponent
{
    public $rekening, $nama_bank, $no_rekening, $atas_nama, $status, $id;
    
    public function render()
    {
        $rekening = Rekening::all();
        return view('livewire.rekening-form', compact('rekening'));
    }

    public function resetCreateForm()
    {
        $this->nama_bank = '';
        $this->no_rekening = '';
        $this->atas_nama = '';
        $this->status = '';
    }

    public function store()
    {
        $this->validate([
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'atas_nama' => 'required',
            'status' => 'required',
        ]);

        Rekening::create([
            'nama_bank' => $this->nama_bank,
            'no_rekening' => $this->no_rekening,
            'atas_nama' => $this->atas_nama,
            'status' => $this->status,
        ]);
        $this->resetInput();
        
        if ($this->id) {
            $rekening = Rekening::find($this->id);
            $rekening->update([
            'nama_bank' => $this->nama_bank,
            'no_rekening' => $this->no_rekening,
            'atas_nama' => $this->atas_nama,
            'status' => $this->status,
        ]);
        } else {
            $rekening = Rekening::create([
            'nama_bank' => $this->nama_bank,
            'no_rekening' => $this->no_rekening,
            'atas_nama' => $this->atas_nama,
            'status' => $this->status,
            ]);
        }
    }

    public function mount($id)
    {
        $rekening = Rekening::find($id);
        if (!is_null($rekening)) {
            $this->id = $id;
            $this->nama_bank = $rekening->nama_bank;
            $this->no_rekening = $rekening->no_rekening;
            $this->atas_nama = $rekening->atas_nama;
            $this->status = $rekening->status;
        }
    }



}
