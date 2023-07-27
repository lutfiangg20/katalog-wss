<?php

namespace App\Http\Livewire;
use App\Models\produk;
use Livewire\Component;

class Indexkategori extends Component
{
    public $cari;
    public $kategori;
    public function render()
    {
        if($this->cari==''){
            $produks = produk::all();
        }
        else{
                $produks = produk::where('produk','LIKE', '%' . $this->cari . '%')->get();
        }
        return view('livewire.indexkategori',compact('produks'));
    }
    public function sayur(){
        $this->kategori='sayur';
    }

}
