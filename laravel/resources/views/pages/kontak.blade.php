@extends('layouts.layouts')
@section('kontak')
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100" style="padding: 50px">
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Tentang Kami</h3>
                </div>
            </div>

            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Jl. Saranani No.168, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p>agungprabowohotel@gmail.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+62 821 1098 4618</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="{{ url('https://twitter.com/apawowo') }}" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('https://facebook.com/apawowo') }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('https://instagram.com/bangprabs') }}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('https://www.linkedin.com/in/bangprabs/') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div>
                            <img style="float: right; margin: 5px; margin-left: 16px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_2JSIJmltanqwc3DcsPLdoybI1tJT0QZuOw&usqp=CAUhttps://www.gannett-cdn.com/-mm-/662af3148f30bf72ccc3d81d324b42694a97749e/c=0-73-1440-887/local/-/media/2018/03/12/USATODAY/USATODAY/636564364072704147-DoubleTree-by-Hilton-San-Diego---Mission-Valley.jpg?width=660&height=374&fit=crop&format=pjpg&auto=webp" alt="Longtail boat in Thailand">
                        </div>
                <p style="text-align: justify;
                font-size: 15px;">
                           Berdiri sejak tahun 1990 dengan luas bangunan 10 Hektar, dilengkapi dengan berbagai macam fasilitas dan berdekatan dengan tempat-tempat penting. Dikeliling dengan pemandangan yang indah sehingga banyak pelancong untuk menginap di hotel kami. sudah lebih dari 20 tahun Hotel Prabowo berdiri.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15921.0305603948!2d122.5215941!3d-3.9672743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47c1a101f71f1691!2sAgung%20Hotel!5e0!3m2!1sid!2sid!4v1640051493489!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
</section>
</div>
</section>
@endsection
