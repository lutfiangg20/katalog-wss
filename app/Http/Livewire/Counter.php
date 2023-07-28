<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Sheets;
use App\Models\produk;

class Counter extends Component
{
    public $cari;
    public $post;
    public $perPage=14;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        if($this->cari==''){
                if($this->post==''){
                    $produks = produk::paginate($this->perPage);
                }
                else{
                    $produks = produk::where('kategori','LIKE', '%' . $this->post . '%')->paginate($this->perPage);
                }

        }
        else{
                $produks = produk::where('produk','LIKE', '%' . $this->cari . '%')->get();
        }

        return view('livewire.counter',compact('produks'));
    }

    public function loadMore()
    {
        $this->perPage += 14;
    }

    public function semua(){
        $this->post='';
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

    public function pindang(){
        $this->post='pindang';
    }



}
