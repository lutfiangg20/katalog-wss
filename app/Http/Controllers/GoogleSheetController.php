<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use App\Models\produk;

class GoogleSheetController extends Controller
{
    public function index(){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();
        $array = array(
            'http' =>array(
                'method' =>'GET'
            )
            );

        $readsheet = json_decode(
            file_get_contents('https://sheetdb.io/api/v1/ca6d9dz4skm87', false, stream_context_create($array))
            );

        $produks = produk::all();


            produk::create([$readsheet['produk']]);





        $header = $rows->pull(0);
        $search = "Bayam";
        $values = Sheets::collection(header: $header, rows: $rows)->where('produk','like','%'.$search.'%');
        $values->toArray();

        return view('index',compact('values','search'));

    }

    public function indexkategori($kategori){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $kategori = $kategori;
        $values = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();

        return view('index-kategori',compact('values','kategori'));

    }

    public function action(Request $request){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $search = $search;
        $values = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();

        return view('index-search',compact('values','search'));

    }

    public function kategori(){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $cari = 'bay';
        $values = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();

        return view('kategori',compact('values'));
    }

    public function kategorikategori($kategori){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $kategori = $kategori;
        $values = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();

        return view('kategori-kategori',compact('values','kategori'));
    }

    public function detail($id){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $id = $id;
        $values = Sheets::collection(header: $header, rows: $rows);
        /* $data = Sheets::collection(header: $header, rows: $select); */
        $values->toArray();




        return view('detail',compact('values','id'));
    }

    public function akun(){
        return view ('akun');
    }

    public function coba($id){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();
        $header = $rows->pull(0);
        $values = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();

        return view('coba',compact('values','id'));
    }
}
