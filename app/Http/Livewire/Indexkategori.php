<?php

namespace App\Http\Livewire;
use App\Models\produk;
use Livewire\Component;

class Indexkategori extends Component
{
    public $cari;
    public $post;

    public function mount($kategori){
        $this->post = $kategori;
    }
    public function render()
    {

        if($this->cari==''){
            if($this->post==''){
                $produks = produk::all();
            }
            else{
                $produks = produk::where('kategori','LIKE', '%' . $this->post . '%')->get();
            }

        }
        else{
                $produks = produk::where('kategori','LIKE', '%' . $this->post . '%')->get();
        }
        return view('livewire.indexkategori',compact('produks'));
    }

    public function sayur(){
         $this->post='sayur';
    }

    public function buah(){
        $this->post='buah';
    }

    public function ayam(){
        $this->post='ayam';
    }

    public function ikan(){
        $this->post='ikan';
    }

    public function bumbu(){
        $this->post='bumbu';
    }




}
