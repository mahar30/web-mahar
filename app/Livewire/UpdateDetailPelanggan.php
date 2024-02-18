<?php

namespace App\Livewire;

use App\Models\DetailPembeli;
use Livewire\Component;

class UpdateDetailPelanggan extends Component
{
    public DetailPembeli $detailPembeli;
    public $no_wa, $alamat, $user_id;

    public function mount()
    {
        $this->detailPembeli = auth()->user()->detailPembeli;
        $this->no_wa = $this->detailPembeli->no_wa;
        $this->alamat = $this->detailPembeli->alamat;
    }

    public function update()
    {
        $this->validate([
            'no_wa' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $this->detailPembeli->update([
            'no_wa' => $this->no_wa,
            'alamat' => $this->alamat,
        ]);

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.update-detail-pelanggan');
    }
}
