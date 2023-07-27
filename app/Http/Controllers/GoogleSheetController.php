<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use App\Models\produk;
use DB;

class GoogleSheetController extends Controller
{
    public function index(){
        $rows = Sheets::spreadsheet('13xsxRMDO6InHS4OK4GtICRU_ED53nkjzgs_utj6vmZ4')->sheet('Sheet1')->get();
        $header = $rows->pull(0);
        $search = "Bayam";
        $values = Sheets::collection(header: $header, rows: $rows);
        $cek = Sheets::collection(header: $header, rows: $rows);
        $values->toArray();
        $data = array_values($cek->toArray());
        $produks = produk::all();
        $count=0;
        foreach($data as $d){
            if($d['produk'] !== $produks[$count]->produk){
                $insert = DB::table('produk')->updateOrInsert([
                    'produk' => $d['produk'],
                    'kategori' => $d['kategori'],
                    'deskripsi' => $d['deskripsi'],
                    'harga' => $d['harga'],
                    'gambar' => $d['gambar'],
                ]);

            }
            $count=$count++;
        }
        return view('index',compact('search','produks'));
    }

    public function indexkategori(Request $request){
        $kategori=$request->kategori;
        $produks=produk::all();

        return view('index-kategori',compact('produks','kategori'));

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
        $produks=produk::all();
        return view('kategori',compact('produks'));
    }

    public function kategorikategori($kategori){
        $kategori=$kategori;
        $produks=produk::all();
        return view('kategori-kategori',compact('produks','kategori'));
    }

    public function detail($id){
        $produks=produk::find($id);
        return view('detail',compact('produks'));
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
