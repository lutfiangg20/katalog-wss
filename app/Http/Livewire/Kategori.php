<?php

namespace App\Http\Livewire;
use App\Models\produk;
use Livewire\Component;

class Kategori extends Component
{
    public $cari;
    public function render()
    {
        if($this->cari==''){
            $produks = produk::all();
        }
        else{
            $produks = produk::where('produk','LIKE', '%' . $this->cari . '%')->get();
        }
        return view('livewire.kategori',compact('produks'));
    }
}
