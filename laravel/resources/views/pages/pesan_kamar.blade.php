<?php use Carbon\Carbon;  ?>
@extends('layouts.layouts')
@section('pesanKamar')
<section id="hero" style="overflow-y: visible; overflow-y: auto;">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <section id="hero">
            <div style="background: transparent !important;" id="cards_landscape_wrap-2">
                <div class="container" data-aos="fade-up">
                    <div class="row vertical-center">
                        <div class="col-md-12 text-left">
                            <div class="card w-100" style="max-height: 520px;">
                                @if (Session::has('error_message'))
                                <div class="alert alert-danger dark alert-dismissible fade show mb-0" role="alert">
                                    {{ Session::get('error_message')}}
                                </div>
                                @endif
                                @if (Session::has('success_message'))
                                <div class="alert alert-success dark alert-dismissible fade show mb-0" role="alert">
                                    {{ Session::get('success_message')}}
                                </div>
                                @endif
                                <div class="card-header title-icon">
                                    <h3 class="title_icon">Pesan Kamar</h3>
                                </div>
                                <div class="card-body" style="overflow-y: visible; overflow-y: auto;">
                                    <form method="post" id="formPesanKamar" @if (empty($dataPelanggan['id']))
                                        action="{{ url('/pesan-kamar') }}" @else
                                        action="{{ url('pesan-kamar/'.$dataPelanggan['id'])}}" @endif>@csrf
                                        <div class="form-group">
                                            <label for="namaPemesan"><b>Nama Pemesan</b></label>
                                            <input type="text" class="form-control" id="namaPemesan" name="nama"
                                            @if(!empty($dataPelanggan['nama'])){ value="{{ $dataPelanggan['nama'] }}" }
                                                @elseif(Session::has('nama')) { value="{{Session::get('nama')}}" }
                                                @else{ value="{{ old('nama') }}" } @endif aria-describedby="namaPemesan"
                                                placeholder="Masukkan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenisKelamin"><b>Jenis Kelamin</b></label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="inlineRadio1" @if(!empty($dataPelanggan['jenis_kelamin']) &&
                                                    $dataPelanggan['jenis_kelamin']=="Laki Laki" ) checked @endif
                                                    value="Laki Laki">
                                                <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="inlineRadio2" @if(!empty($dataPelanggan['jenis_kelamin']) &&
                                                    $dataPelanggan['jenis_kelamin']=="Perempuan" ) checked @endif
                                                    value="Perempuan">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomorIdentitas"><b>Nomor Identitas</b></label>
                                            <input type="number" class="form-control" id="nomorIdentitas"
                                                name="nomor_identitas" aria-describedby="nomorIdentitas"
                                                @if(!empty($dataPelanggan['nomor_identitas'])){
                                                value="{{ $dataPelanggan['nomor_identitas'] }}" }
                                                @elseif(Session::has('nomor_identitas')) {
                                                value="{{Session::get('nomor_identitas')}}" } @else{
                                                value="{{ old('nomor_identitas') }}" } @endif
                                                placeholder="Masukkan Nomor Identitas">
                                        </div>
                                        <div class="form-group">
                                            <label for="tipeKamar"><b>Tipe Kamar</b></label>
                                            <select class="form-control" id="tipeKamar" name="tipe_kamar">
                                                <option value="">Pilih Kamar</option>
                                                <option @if(!empty($dataPelanggan['tipe_kamar']) &&
                                                    $dataPelanggan['tipe_kamar']=="Kamar Standard" ) selected @endif
                                                    value="Kamar Standard">Kamar Standard</option>
                                                <option @if(!empty($dataPelanggan['tipe_kamar']) &&
                                                    $dataPelanggan['tipe_kamar']=="Kamar Deluxe" ) selected @endif
                                                    value="Kamar Deluxe">Kamar Deluxe</option>
                                                <option @if(!empty($dataPelanggan['tipe_kamar']) &&
                                                    $dataPelanggan['tipe_kamar']=="Kamar Family" ) selected @endif
                                                    value="Kamar Family">Kamar Family</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hargaKamar"><b>Harga Kamar</b></label>
                                            <input type="text" class="form-control" id="hargaKamar" readonly
                                                name="harga_kamar" aria-describedby="hargaKamar"
                                                @if(!empty($dataPelanggan['harga_kamar'])){
                                                value="{{ $dataPelanggan['harga_kamar'] }}" }
                                                @elseif(Session::has('harga_kamar')) {
                                                value="{{Session::get('harga_kamar')}}" } @else{
                                                value="{{ old('harga_kamar') }}" } @endif placeholder="Harga Kamar">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="date"><b>Tanggal Pemesanan</b></label>
                                            <input class="form-control" id="date" name="date" placeholder="dd/mm/yyyy"
                                                @if (!empty($dataPelanggan['tanggal_pesan'])){
                                                placeholder="{{ Carbon::parse($dataPelanggan['tanggal_pesan'])->format('d/m/Y') }}"
                                                value="{{ Carbon::parse($dataPelanggan['tanggal_pesan'])->format('d/m/Y') }}"
                                                } @elseif(Session::has('tanggal_pesan')) {
                                                value="{{Session::get('tanggal_pesan')}}" } @else{
                                                value="{{ old('tanggal_pesan') }}" } @endif type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label for="durasiMenginap"><b>Durasi Menginap</b></label>
                                            <input type="number" class="form-control" id="durasiMenginap"
                                                name="durasi_menginap" aria-describedby="durasiMenginap"
                                                @if(!empty($dataPelanggan['durasi_menginap'])){
                                                value="{{ $dataPelanggan['durasi_menginap'] }}" }
                                                @elseif(Session::has('durasi_menginap')) {
                                                value="{{Session::get('durasi_menginap')}}" } @else{
                                                value="{{ old('durasi_menginap') }}" } @endif
                                                placeholder="Masukkan Durasi Menginap">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                value="Iya" name="sarapan" @if(!empty($dataPelanggan['breakfast']) &&
                                                $dataPelanggan['breakfast']=="Iya" ) checked @endif>
                                            <label class="form-check-label" for="exampleCheck1">Termasuk Breakfast
                                                ?</label>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="totalHarga"><b>Total Bayar</b></label>
                                            <input readonly type="number" class="form-control" id="totalHarga"
                                                @if(!empty($dataPelanggan['total_harga'])){
                                                value="{{ $dataPelanggan['total_harga'] }}" }
                                                @elseif(Session::has('harga')) { value="{{Session::get('harga')}}" }
                                                @else{ value="{{ old('total_harga') }}" } @endif name="total_bayar"
                                                aria-describedby="totalHarga"
                                                placeholder="Total Bayar muncul setelah di Submit">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2"
                                            value="Submit">Submit</button>
                                        <a href="{{ url('/') }}" class="btn btn-danger mt-2"
                                            value="Submit">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection
