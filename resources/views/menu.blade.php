<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>njajan | Politeknik Balekambang Jepara</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('assets/home/img/logo/logonjajan.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/home/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/home/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <<!--=======Header=======-->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <a href="home" class="logo d-flex align-items-center me-auto me-lg-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/home/img/logo/njajan.png" alt="">
                    {{-- <h1>njajan<span>.</span></h1> --}}
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li><a href="{{ url('tentang') }}">Tentang</a></li>
                        <li><a href="{{ url('njajan') }}">njajan</a></li>
                        <li><a href="{{ url('pasar') }}">Lokasi</a></li>
                        <li><a href="{{ url('kontak') }}">Kontak</a></li>
                    </ul>
                </nav>
                <!-- .navbar -->

                <a class="btn-book-a-table" href="{{ url('jastip') }}">Jastip | <i class="bi bi-box-seam-fill"></i></a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header>
        <!-- End Header -->


        <main id="main" class="mt-2">
            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Daftar Pasar</h2>
                        <p>Silahkan Pilih Pasar <span>Dibawah Ini</span></p>
                    </div>
                    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <li class="nav-item">
                            <a class="nav-link show active" href="#">
                                <h4>All</h4>
                            </a>
                        </li>
                        @foreach ($pasar as $sar)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('kategori/' . $sar->slug) }}">
                                    <h4>{{ $sar->namapasar }}</h4>
                                </a>
                            </li>
                            <!-- End tab nav item -->
                        @endforeach
                    </ul>
                </div>
            </section><!-- End Menu Section -->

            <section id="menu" class="menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Cari Menu</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form class="d-flex mb-2 mt-2" action="njajan">
                                        <input class="form-control me-2" name="search" value="{{ request('search') }}"
                                            placeholder="Cari Menu">
                                        <button class="btn btn-outline-danger" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->

            <section id="menu" class="menu">
                <div class="container" data-aos="fade-up">
                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade show active" id="menu-starters">
                            <div class="row gy-5">
                                <div class="row gy-5">
                                    @foreach ($datamakanans as $isi)
                                        <div class="col-lg-4 menu-item">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="10000">
                                                        <img src="{{ asset('storage/makanan/' . $isi->fotomakanan) }}"
                                                            class="menu-img img-fluid d-block w-100" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>{{ $isi->namamakanan }}</h4>
                                            <p class="ingredients">{{ $isi->namapenjual }}</p>
                                            <p class="ingredients">{{ $isi->pasar }}</p>
                                            <p class="price">
                                                Rp.{{ $isi->harga }},.
                                            </p>
                                            @if ($isi->nomor)
                                                <form action="tel:{{ $isi->nomor }}">
                                                    <button type="submit" class="btn btn-outline-danger mb-2">Hubungi
                                                        |
                                                        <i class="bi bi-telephone"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                        <!-- Menu Item -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End Starter Menu Content -->
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>njajan</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                    Owner by <a href="https://www.instagram.com/ibadirsyadul33/">Irsyadul Ibad</a>
                </div>
            </div>

        </footer>
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ url('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('assets/home/vendor/aos/aos.js') }}"></script>
        <script src="{{ url('assets/home/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ url('assets/home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ url('assets/home/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ url('assets/home/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ url('assets/home/js/main.js') }}"></script>

</body>

</html>
