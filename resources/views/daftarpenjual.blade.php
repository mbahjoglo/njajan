@php
    use App\Models\Pasar;
@endphp
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

        </div>
    </header><!-- End Header -->


    <main id="main">

        <br>
        <!-- ======= About Section ======= -->
        <section id="harga" class="harga">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Daftar</h2>
                    <p><b><span>Penjual</span></b></p>
                </div>

                <!-- ======= Daftar Section ======= -->
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">
                        <form action="{{ route('home.penjual') }}" method="post" class="p-3"
                            enctype="multipart/form-data">
                            @csrf
                            @if (session('success'))
                                <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="form-group mt-4">
                                <input type="text" class="form-control" name="namapenjual" id="nama"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" class="form-control" name="alamat" id="nama"
                                    placeholder="Alamat" required>
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" class="form-control" name="nomor" id="nomor"
                                    placeholder="Nomor WhatsApp" required>
                            </div>
                            <div class="form-group mt-4">
                                <label for="formFileLg" class="form-label">Pilih Lokasi Pasar </label>
                                <select class="form-select" aria-label="Lokasi Pasar" required name="pasar">
                                    <option value="">Pilih Pasar</option>
                                    @foreach (Pasar::all() as $pasar)
                                        <option value="{{ $pasar->namapasar }}">{{ $pasar->namapasar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <div>
                                    <label for="formFileLg" class="form-label">Foto Penjual</label>
                                    <input class="form-control" id="foto" type="file" name="foto">
                                </div>
                            </div>
                            <div class="text-center"><button class="btn btn-danger mt-5" type="submit">Daftar
                                    Penjual</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- End Contact Section -->

            </div>
        </section>
        <!-- End About Section -->

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
