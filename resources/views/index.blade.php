<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>njajan | Politeknik Balekambang Jepara</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/home/img/favicon.png" rel="icon">
    <link href="assets/home/img/apple-touch-icon.png" rel="apple-touch-icon">

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

            <a href="index" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>njajan<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="menu">Menu</a></li>
                    <li><a href="pasar">Pasar</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <a class="btn-book-a-table" href="login">Login</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <br>
    <br>

    <!-- ======= Hero Section ======= -->
    @foreach ($homes as $isi)
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">{{ $isi->judul }}</h2>
                        <p data-aos="fade-up" data-aos-delay="100">{{ $isi->deskripsi }}</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="" class="btn-book-a-table">Daftar Sebagai Penjual</a>
                            <a href="{{ $isi->link }}" class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="{{ asset('storage/home/' . $isi->foto) }}" class="img-fluid" alt=""
                            data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
                <br>
                <br>
            </div>
        </section>
    @endforeach
    <!-- End Hero Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div
                class="row  d-flex align-items-center justify-content-center d-flex align-items-center justify-content-center">

                <div class="col-lg-1 col-md-4 col-6">
                    <img src="assets/home/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-1 col-md-4 col-6">
                    <img src="assets/home/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>
    <!-- End Clients Section -->

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

    <div id="preloader"></div>

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
