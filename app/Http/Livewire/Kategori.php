<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Kategori extends Component
{
    public $cari;
    public function render()
    {
        if($this->cari==''){
            $options = array(
                'http' =>array(
                    'method' =>'GET'
                )
                );

                $result = json_decode(
                    file_get_contents('https://sheetdb.io/api/v1/ca6d9dz4skm87', false, stream_context_create($options))
                );
        }
        else{
            $options = array(
                'http' =>array(
                    'method' =>'GET'
                )
                );

                $result = json_decode(
                    file_get_contents('https://sheetdb.io/api/v1/ca6d9dz4skm87/search?sheet=Sheet1&produk=*'.$this->cari.'*', false, stream_context_create($options))
                );
        }
        return view('livewire.kategori',compact('result'));
    }
}
