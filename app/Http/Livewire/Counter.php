<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Sheets;
use App\Models\produk;

class Counter extends Component
{
    public $cari;
    public function render()
    {

        $search = $this->cari;

        if($this->cari==''){
                $produks = produk::all();
        }
        else{
                $produks = produk::where('produk','LIKE', '%' . $this->cari . '%')->get();
        }

        return view('livewire.counter',compact('produks'));
    }



}
