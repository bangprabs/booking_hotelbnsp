<?php use Carbon\Carbon;  ?>
@extends('layouts.layouts')
@section('daftarPelanggan')
<section id="hero" style="overflow-y: visible; overflow-y: auto;">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <section id="hero">
            <div style="background: transparent !important;" id="cards_landscape_wrap-2">
                <div class="container" data-aos="fade-up">
                    <div class="row vertical-center" >
                        <div class="col-md-12 text-left">

                            <div class="card w-100" style="max-height: 520px;">

                                @if (Session::has('success_message'))
                                <div class="alert alert-success dark alert-dismissible fade show mb-0" id="success-alert" role="alert">
                                    {{ Session::get('success_message')}}
                                </div>
                                @php
                                    Session::forget('success_message');
                                @endphp
                                @endif
                                <div class="card-header title-icon">
                                    <h3 class="title_icon">Daftar Pelanggan</h3>
                                </div>
                                <div class="card-body" style="overflow-y: visible; overflow-y: auto;">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Tipe Kamar</th>
                                            <th scope="col">Tanggal Pesan Kamar</th>
                                            <th scope="col">Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            @foreach ($detailDataPelanggan as $pelanggan)
                                                <tr>
                                                    <th scope="row">{{ $no }}</th>
                                                    <td>{{ $pelanggan['nama'] }}</td>
                                                    <td>{{ $pelanggan['tipe_kamar'] }}</td>
                                                    <td>{{ Carbon::parse($pelanggan['tanggal_pesan'])->format('m/d/Y'); }}</td>
                                                    <td>
                                                        <a href="{{ url('detail-pelanggan/'.$pelanggan['id']) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                                        <a href="{{ url('pesan-kamar/'.$pelanggan['id']) }}" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                                                        <a onclick="return confirm('Are you sure?')" href="{{ url('hapus-pelanggan/'.$pelanggan['id']) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $no++?>
                                            @endforeach
                                        </tbody>
                                      </table>
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
