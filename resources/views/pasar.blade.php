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

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Lokasi</h2>
                    <p>Beberapa <span>Lokasi</span> yang terdapat di njajan</p>
                </div>

            </div>

            <!--Pasar-->
            {{-- <div class="container-fluid" data-aos="fade-up">
                @foreach ($data_pasars as $isi)
                    <div class="container text-center">
                        <div class="card border-light mb-1 p-1">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/pasar/' . $isi->foto) }}" class="rounded-start"
                                        width="300" alt="">
                                </div>
                                <div class="col-md-8 mt-5">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $isi->namapasar }}</h5>
                                        <p class="card-text">{{ $isi->alamat }}</p>
                                        <p class="card-text mt-2">
                                        <h5 class="card-title text-danger">Jumlah Produk :</h5>
                                        <a href="{{ $isi->link }}">
                                            <small class="text-danger"><i class="bi bi-geo-alt"></i>
                                                Google
                                                Maps</small>
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}


            <!-- ======= Chefs Section ======= -->
            <section id="chefs" class="chefs section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">
                        @foreach ($data_pasars as $isi)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="chef-member">
                                    <div class="member-img">
                                        <img src="{{ asset('storage/pasar/' . $isi->foto) }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $isi->namapasar }}</h4>
                                        <span>{{ $isi->alamat }}</span>
                                        <a href="{{ $isi->link }}" class="btn btn-danger mt-4" type="button">Lokasi
                                            <i class="bi bi-geo-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End Chefs Member -->
                        @endforeach
                    </div>
                </div>
            </section><!-- End Chefs Section -->

            </div>
        </section>
        <!-- End Events Section -->

    </main>
    <!-- End #main -->

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

    </footer><!-- End Footer -->
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
