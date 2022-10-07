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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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


  <main id="main">
    
    <br>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Menu</h2>
          <p>Daftar Menu yang ada di <span>njajan</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-makanan">
              <h4>Makanan</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-minuman">
              <h4>Minuman</h4>
            </a><!-- End tab nav item -->
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-makanan">

            <br>
            <form class="d-flex mb-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Makanan</h3>
            </div>

            <div class="row gy-5">
              @foreach ($data_makanans as $isi)
              <div class="col-lg-4 menu-item">
                <a href="{{ asset('storage/makanan/'.$isi->foto) }}" class="glightbox"><img src="{{ asset('storage/makanan/'.$isi->foto) }}" class="menu-img img-fluid" alt=""></a>
                <h4>{{ $isi->nama }}</h4>
                <p class="ingredients">{{ $isi->penjual }}</p>
                <p class="ingredients">{{ $isi->lokasi }}</p>
                <p class="price">
                  Rp.{{ $isi->harga }},.
                </p>
                <a class="btn-book-a-table" href="https://wa.me/{{ $isi->nomor }}">Hubungi Penjual</a>
              </div><!-- Menu Item -->
              @endforeach
            </div>
          </div><!-- End Makanan Menu Content -->

          <div class="tab-pane fade" id="menu-minuman">

            <br>
            <form class="d-flex mb-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Minuman</h3>
            </div>

            <div class="row gy-5">

              @foreach ($data_minumans as $isi)
              <div class="col-lg-4 menu-item">
                <a href="{{ asset('storage/minuman/'.$isi->foto) }}" class="glightbox"><img src="{{ asset('storage/minuman/'.$isi->foto) }}" class="menu-img img-fluid" alt=""></a>
                <h4>{{ $isi->nama }}</h4>
                <p class="ingredients">{{ $isi->penjual }}</p>
                <p class="ingredients">{{ $isi->lokasi }}</p>
                <p class="price">
                  Rp.{{ $isi->harga }},.
                </p>
                <a class="btn-book-a-table" href="https://wa.me/{{ $isi->nomor }}">Hubungi Penjual</a>
              </div><!-- Menu Item -->
              @endforeach

            </div>
          </div><!-- End Minuman Menu Content -->

        </div>

      </div>
    </section>
    <!-- End Menu Section -->

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

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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