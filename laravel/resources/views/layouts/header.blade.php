<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <h1><a class="title_icon" href="{{ url('/') }}">
                    <p class="title_icon text-lowercase">Prabowo Hotel</p>
                </a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a
                    @if ($page_name=="index" )
                        class="nav-link scrollto active"
                    @else
                        class="nav-link scrollto"
                    @endif
                    @if ($page_name=="produk" )
                        class="nav-link scrollto active"
                    @endif
                    href="{{ url('/') }}">Beranda</a>
                </li>
                <li><a
                    @if ($page_name=="produk" )
                        class="nav-link scrollto active"
                    @endif
                        href="{{ url('/produk') }}">Produk</a></li>
                <li><a
                    @if ($page_name=="daftarHarga" )
                        class="nav-link scrollto active"
                    @else
                        class="nav-link scrollto"
                    @endif href="daftar-harga">Daftar Harga Kamar</a></li>
                <li><a
                    @if ($page_name=="kontak" )
                        class="nav-link scrollto active"
                    @else
                        class="nav-link scrollto"
                    @endif
                    href="{{ url('tentang-kami') }}">Tentang Kami</>
                </li>
                <li><a
                    @if ($page_name=="pesanKamar" )
                        class="nav-link scrollto active"
                    @else
                        class="nav-link scrollto"
                    @endif
                 href="{{ url('pesan-kamar') }}">Pesan Kamar</a></li>
                 <li><a
                    @if ($page_name=="daftarPelanggan" )
                        class="nav-link scrollto active"
                    @else
                        class="nav-link scrollto"
                    @endif
                 href="{{ url('daftar-pelanggan') }}">Daftar Pelanggan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
