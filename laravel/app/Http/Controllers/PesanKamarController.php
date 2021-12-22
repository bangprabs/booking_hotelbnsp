<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\DataPelanggan;
use Session;

class PesanKamarController extends Controller
{
    public function pesanKamar(){
        $page_name = "pesanKamar";
        return view('pages.pesan_kamar')->with(compact('page_name'));
    }

    public function tambahEditDataPelanggan(Request $request, $id=null){
        $page_name = "pesanKamar";
        if ($id=="") {
            $title = "Tambah Blog/Artikel";
            $pelanggan = new DataPelanggan;
            $dataPelanggan = new DataPelanggan;
            $pesan = "Data sukses ditambah";
        }else{
            $title = "Edit Blog/Artikel";
            $pelanggan = DataPelanggan::find($id);
            $dataPelanggan = DataPelanggan::find($id);
            $pesan = "Data sukses diedit";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $data['date'] = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

            $dataPelanggan->nama = $data['nama'];
            $dataPelanggan->jenis_kelamin = $data['jenis_kelamin'];
            $dataPelanggan->nomor_identitas = $data['nomor_identitas'];
            $dataPelanggan->tipe_kamar = $data['tipe_kamar'];
            $dataPelanggan->harga_kamar = $data['harga_kamar'];
            $dataPelanggan->tanggal_pesan = $data['date'];
            $dataPelanggan->durasi_menginap = $data['durasi_menginap'];

            if (empty($data['sarapan'])) {
                $data['sarapan'] = "Tidak";
            }

            if(!empty($data['sarapan'])){
                $dataPelanggan->breakfast = $data['sarapan'];
            }else{
                $dataPelanggan->breakfast = "Tidak";
            }

            $dataPelanggan->total_harga = ($data['harga_kamar'] * $data['durasi_menginap']);

            if ($data['durasi_menginap'] > 3) {
                $dataPelanggan->total_harga = $data['harga_kamar'] * $data['durasi_menginap'] * 0.1;
            } else if($data['sarapan'] == "Iya") {
                $dataPelanggan->total_harga = $data['harga_kamar'] * $data['durasi_menginap'] + 80000;
            }

            $dataPelanggan->save();

            $nama = $dataPelanggan->nama;
            $jenis_kelamin = $dataPelanggan->jenis_kelamin;
            $nomor_identitas = $dataPelanggan->nomor_identitas;
            $tipe_kamar = $dataPelanggan->tipe_kamar;
            $harga_kamar = $dataPelanggan->harga_kamar;
            $tanggal_pesan = $dataPelanggan->tanggal_pesan;
            $durasi_menginap = $dataPelanggan->durasi_menginap;
            $hargaTotal = $dataPelanggan->total_harga;
            session::flash('nama', $nama);
            session::flash('jenis_kelamin', $jenis_kelamin);
            session::flash('nomor_identitas', $nomor_identitas);
            session::flash('tipe_kamar', $tipe_kamar);
            session::flash('harga_kamar', $harga_kamar);
            session::flash('tanggal_pesan', $tanggal_pesan);
            session::flash('durasi_menginap', $durasi_menginap);
            session::flash('harga', $hargaTotal);
            Session::flash('success_message', $pesan);
            return redirect()->back();
        }
        return view('pages.pesan_kamar')->with(compact('page_name', 'dataPelanggan'));
    }
}
