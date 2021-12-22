@extends('layouts.layouts')
@section('detailPelanggan')
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <section id="hero">
            <div style="background: transparent !important;" id="cards_landscape_wrap-2">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-4 vertical-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div data-aos="fade-up" data-aos-duration="900" class="col-md-12">
                                            <div class="card-flyer" style="margin-top: -50px;">
                                                <div class="text-box">
                                                    <div class="image-box">
                                                        <img src="https://pix8.agoda.net/hotelImages/478/478891/478891_16092917510047130456.jpg?s=1024x768"
                                                            alt="" />
                                                    </div>
                                                    <div class="text-container">
                                                        <h6 class="title_icon">
                                                            <p class="title_icon">Kamar Standard</p>
                                                        </h6>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry.
                                                            Lorem
                                                            Ipsum has been the industry's standard dummy text ever since
                                                            the 1500s.
                                                        </p>
                                                        <button type="button" class="btn btn-primary mt-3"
                                                            data-toggle="modal" data-target="#kamarStandard">
                                                            Detail Kamar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div data-aos="fade-up" data-aos-duration="1200" class="col-md-12">
                                            <div class="card-flyer" style="margin-top: -50px;">
                                                <div class="text-box">
                                                    <div class="image-box">
                                                        <img src="https://pix8.agoda.net/hotelImages/288820/-1/9a755d53124fd31757e074d20b2dce25.jpg?ca=24&ce=0&s=1024x768"
                                                            alt="" />
                                                    </div>
                                                    <div class="text-container">
                                                        <h6 class="title_icon">
                                                            <p class="title_icon">Kamar Deluxe</p>
                                                        </h6>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since
                                                            the 1500s.
                                                        </p>
                                                        <button type="button" class="btn btn-primary mt-3"
                                                            data-toggle="modal" data-target="#kamarDeluxe">
                                                            Detail Kamar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div data-aos="fade-up" data-aos-duration="1900" class="col-md-12">
                                            <div class="card-flyer" style="margin-top: -50px;">
                                                <div class="text-box">
                                                    <div class="image-box">
                                                        <img src="https://pix8.agoda.net/hotelImages/358/3583045/3583045_17112922210060044723.jpg?s=1024x768"
                                                            alt="" />
                                                    </div>
                                                    <div class="text-container">
                                                        <h6 class="title_icon">
                                                            <p class="title_icon">Kamar Family</p>
                                                        </h6>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since
                                                            the 1500s.
                                                        </p>
                                                        <button type="button" class="btn btn-primary mt-3"
                                                            data-toggle="modal" data-target="#kamarFamily">
                                                            Detail Kamar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 vertical-center">
                            <div class="card text-center w-100">
                                <div class="card-header">
                                    <h3 class="title_icon">Detail Pelanggan</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <tr class="text-left">
                                            <td><b>Nama Pemesan</b></td>
                                            <td>{{ $detailDataPelanggan['nama'] }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Nomor Identitas</b></td>
                                            <td>{{ $detailDataPelanggan['nomor_identitas'] }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Jenis Kelamin</b></td>
                                            <td>{{ $detailDataPelanggan['jenis_kelamin'] }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Tipe Kamar</b></td>
                                            <td>{{ $detailDataPelanggan['tipe_kamar'] }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Durasi Penginapan</b></td>
                                            <td>{{ $detailDataPelanggan['durasi_menginap'] }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Discount</b></td>
                                            <td>
                                                @if (($detailDataPelanggan['breakfast'] == "Iya"))
                                                    10%
                                                @else
                                                    Tidak ada discount
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><b>Total Bayar</b></td>
                                            <td>@currency($detailDataPelanggan['total_harga'])</td>
                                        </tr>
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
