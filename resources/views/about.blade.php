<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>njajan | Politeknik Balekambang Jepara</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/home/img/logo/logonjajan.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/home/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/home/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
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


    <main id="main">

        <br>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                @foreach ($view_abouts as $isi)
                    <div class="section-header">
                        {{-- <h2>Tentang</h2> --}}
                        <p>{{ $isi->judul }}</p>
                    </div>
                    <div class="card border-light">
                        <div class="content ps-0 ps-lg-5">
                            <p class="text-center fw-medium">
                                {{ $isi->deskripsi }}
                            </p>
                            <div class="position-relative mt-4">
                                <img src="{{ asset('storage/about/' . $isi->foto) }}" class="img-fluid"
                                    alt="{{ asset('storage/about/' . $isi->foto) }}">
                                <a href="{{ $isi->link }}" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hitungmakanans }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Produk</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hitungpenjuals }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Penjual</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hitungpasars }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Lokasi</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hitungulasans }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Ulasan</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Ungkapan</h2>
                <p>Apakah mereka <span>Mengatakan Tentang Kami</span></p>
            </div>

            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($testimonis as $isi)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">

                                    <div class="col-lg-6">

                                        <div class="text-center">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{ $isi->deskripsi }}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <br>
                                            <h3>{{ $isi->nama }}</h3>
                                            <h4>{{ $isi->jabatan }}</h4>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Tulis Ungkapan</h2>
                <p>Tulis <span>Ungkapan </span>Tentang Kami</p>
            </div>

            <div class="row g-0">

                <form action="{{ route('tetimoni.home') }}" method="post" role="form" class="p-3 p-md-4">
                    @csrf
                    <div class="form-group mt-3">
                        <input class="form-control" name="nama" rows="5" placeholder="Nama Lengkap"
                            required>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="deskripsi" rows="5" placeholder="Tulis Ungkapan" required></textarea>
                    </div>

                    <div class="text-center"><button class="btn btn-danger mt-5" type="submit">Kirim
                            Ungkapan</button>
                    </div>
                </form><!--End Contact Form -->

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">

                </div><!-- End Reservation Form -->

            </div>

        </div>
    </section><!-- End Book A Table Section -->

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

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/vendor/aos/aos.js"></script>
    <script src="assets/home/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/home/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/home/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/home/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/home/js/main.js"></script>

</body>

</html>
