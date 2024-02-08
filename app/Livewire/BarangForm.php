<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BarangForm extends ModalComponent
{

    public $nama_barang, $keterangan, $gambar, $status, $total_terjual, $id, $barang;
    public function render()
    {
        $barang = Barang::all();
        return view('livewire.barang-form', compact('barang'));
    }

    public function resetCreateForm()
    {
        $this->nama_barang = '';
        $this->keterangan = '';
        $this->gambar = '';
        $this->status = '';
        $this->total_terjual = '';
    }

    public function store()
    {
        $this->validate([
            'nama_barang' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
            'status' => 'required',
            'total_terjual' => 'required',
        ]);

        Barang::create([
            'nama_barang' => $this->nama_barang,
            'keterangan' => $this->keterangan,
            'gambar' => $this->gambar,
            'status' => $this->status,
            'total_terjual' => $this->total_terjual,
        ]);
        $this->resetInput();

        if ($this->id) {
            $barang = Barang::find($this->id);
            $barang->update([
                'nama_barang' => $this->nama_barang,
                'keterangan' => $this->keterangan,
                'gambar' => $this->gambar,
                'status' => $this->status,
                'total_terjual' => $this->total_terjual,
            ]);
        } else {
            $barang = Barang::create([
                'nama_barang' => $this->nama_barang,
                'keterangan' => $this->keterangan,
                'gambar' => $this->gambar,
                'status' => $this->status,
                'total_terjual' => $this->total_terjual,
            ]);
        }
    }

    public function mount($rowId = null)
    {

        $this->barang = Barang::all();
        if (!is_null($rowId)) {
            $barang = Barang::find($rowId);
            if ($barang) {
                $this->id = $barang->id;
                $this->nama_barang = $barang->nama_barang;
                $this->keterangan = $barang->keterangan;
                $this->gambar = $barang->gambar;
                $this->status = $barang->status;
                $this->total_terjual = $barang->total_terjual;
            }
        }
    }
    
}
