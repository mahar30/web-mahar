<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Ukuran;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toastable;

class UkuranForm extends ModalComponent
{
    use Toastable;

    public Ukuran $ukuran;
    public $barang, $barang_id, $nama_ukuran, $harga;
    public $ukuranItems = [];

    public function render()
    {
        $barang = Barang::all();
        return view('livewire.ukuran-form', compact('barang'));
    }

    public function addUkuranItems()
    {
        $this->ukuranItems[] = [
            'barang_id' => '',
            'ukuran' => '',
            'harga' => '',
        ];
    }

    public function removeUkuranItems($index)
    {
        unset($this->ukuranItems[$index]);
        $this->ukuranItems = array_values($this->ukuranItems);
    }

    public function resetForm()
    {
        $this->reset(['barang_id', 'ukuran', 'harga']);
    }

    public function store()
    {
        $validatedData = $this->validate([
            'barang_id' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);
    }

    public function mount($id)
    {
    }
}
