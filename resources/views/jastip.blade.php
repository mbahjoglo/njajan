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

            <a class="btn-book-a-table" href="{{ url('daftarjastip') }}">Daftar Jastip | <i
                    class="bi bi-box-seam-fill"></i></a>

        </div>
    </header><!-- End Header -->


    <main id="main">

        <br>
        <!-- ======= About Section ======= -->
        <section id="harga" class="harga">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Member</h2>
                    <p><b><span>Jastip</span></b> ( Jasa Titip )</p>
                </div>

                <!-- ======= Pencarian Jastip ======= -->
                @if ($jastips->isNotEmpty())
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <div class="card shadow p-5">
                                <input type="text" class="form-control" name="subject" id="cari-alamat"
                                    placeholder="Cari Alamat Kurir" required>
                            </div>
                        </div>
                    </section><!-- End Contact Section -->
                @endif

                <div class="container py-5">
                    <div class="row mb-lg-4">
                        @forelse ($jastips as $jastip)
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5" id="jastip-{{ $jastip->id }}">
                                <!-- Add an id to each Jastip element -->
                                <div class="lc-block mb-3">
                                    <img class="img-fluid" src="{{ url('storage/jastip/' . $jastip->foto) }}"
                                        sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                        alt="Photo by Laika Notebooks" loading="lazy">
                                </div>
                                <div class="lc-block text-center mb-3">
                                    <div editable="rich">
                                        <h3 class="fw-light">{{ $jastip->nama }}</h3>
                                    </div>
                                </div>
                                <div class="lc-block text-center mb-4">
                                    <div editable="rich">
                                        <p class="small text-muted">{{ $jastip->alamat }}</p>
                                    </div>
                                </div>
                                <div class="lc-block text-center">
                                    <a href="https://wa.me/+62{{ $jastip->nomor }}"> <button class="btn btn-danger"
                                            type="button">Hubungi
                                            Jastip</button></a>
                                </div>
                            </div>
                        @empty
                            <h1 class="text-center">Belum ada data tersedia</h1>
                        @endforelse
                    </div>
                </div>

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
    <script>
        // Get the input field and Jastip elements
        const input = document.getElementById("cari-alamat");
        const jastipElements = document.querySelectorAll("[id^='jastip-']");

        input.addEventListener("input", function() {
            const searchTerm = input.value.toLowerCase();

            // Loop through each Jastip element
            jastipElements.forEach((jastip) => {
                const address = jastip.querySelector("p.text-muted").textContent.toLowerCase();
                // Check if the address contains the search term
                if (address.includes(searchTerm)) {
                    jastip.style.display = "block"; // Show the element
                } else {
                    jastip.style.display = "none"; // Hide the element
                }
            });
        });
    </script>

</body>

</html>
