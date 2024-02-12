<?php

namespace App\Livewire;

use App\Models\Rekening;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class RekeningForm extends ModalComponent
{
    use Toastable;
    public $rekening, $nama_bank, $no_rekening, $nama_rekening;

    public function render()
    {
        return view('livewire.rekening-form');
    }

    public function resetCreateForm()
    {
        $this->nama_bank = '';
        $this->no_rekening = '';
        $this->nama_rekening = '';
    }

    protected $rules = [
        'nama_bank' => 'required',
        'no_rekening' => 'required',
        'nama_rekening' => 'required',
    ];

    public function store()
    {
        $validatedData = $this->validate();
        $this->rekening->fill($validatedData);
        $this->rekening->save();
        $this->success($this->rekening->wasRecentlyCreated ? 'Rekening berhasil ditambahkan' : 'Rekening berhasil diubah');
        $this->closeModalWithEvents([RekeningTable::class => 'rekeningUpdated']);
        $this->resetCreateForm();
    }

    public function mount($rowId = null)
    {
        $this->rekening = $rowId ? Rekening::find($rowId) : new Rekening();
        if ($this->rekening->exists) {
            $this->nama_bank = $this->rekening->nama_bank;
            $this->no_rekening = $this->rekening->no_rekening;
            $this->nama_rekening = $this->rekening->nama_rekening;
        }
    }
}
