<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPelanggan;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        $page_name = "index";
        return view('layouts.layouts')->with(compact('page_name'));
    }

    public function produk(){
        $page_name = "produk";
        return view('pages.produk')->with(compact('page_name'));
    }

    public function daftarHarga(){
        $page_name = "daftarHarga";
        return view('pages.daftar_harga')->with(compact('page_name'));
    }

    public function kontak(){
        $page_name = "kontak";
        return view('pages.kontak')->with(compact('page_name'));
    }

    public function daftarPelanggan(){
        $page_name = "daftarPelanggan";
        $detailDataPelanggan = DataPelanggan::orderBy('id', 'Desc')->get()->toArray();
        dd($detailDataPelanggan); die;
        $pesan = "Data sukses dihapus";
        Session::flash('success_message', $pesan);
        return view('pages.daftar_pelanggan')->with(compact('page_name', 'detailDataPelanggan'));
    }

    public function hapusPelanggan($id)
    {
        DataPelanggan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function detailPelanggan($id){
        $page_name = "detailPelanggan";
        $detailDataPelanggan = DataPelanggan::find($id)->toArray();
        return view('pages.detail_pelanggan')->with(compact('page_name', 'detailDataPelanggan'));
    }
}
