<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Sheets;
use SheetDB\SheetDB;
use App\Models\produk;

class Counter extends Component
{
    public $cari;
    public function render()
    {
        /* $sheetdb = new SheetDB('ca6d9dz4skm87','Sheet1'); */
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();
        $header = $rows->pull(0);
        $search = "%$this->cari";
        /* $values = Sheets::collection(header: $header, rows: $rows)->where('produk','LIKE','%'.$this->cari.'%'); */
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
        /* $values = Sheets::collection(header: $header, rows: $rows)->where('produk','LIKE', '%' . $this->cari . '%'); */
        /* $values = Sheets::collection(header: $header, rows: $rows); */

        /* $values->toArray(); */
        return view('livewire.counter',compact('result'));
    }


}
