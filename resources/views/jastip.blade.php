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
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">

                        <form action="forms/contact.php" method="post" role="form"
                            class="php-email-form p-3 p-md-4">
                            <div class="row">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Cari Kurir" required>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Cari Kurir</button></div>
                        </form><!--End Contact Form -->

                    </div>
                </section><!-- End Contact Section -->

                <div class="container py-5">
                    <div class="row mb-lg-4">

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-5">
                            <div class="lc-block mb-3">
                                <img class="img-fluid"
                                    src="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080"
                                    srcset="https://images.unsplash.com/photo-1557752282-dcc5ff304d4c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1557752282-dcc5ff304d4c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8bWFnZW50YXxlbnwwfDJ8fHwxNjM1MDEwOTEz&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w"
                                    sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080"
                                    alt="Photo by Laika Notebooks" loading="lazy">
                            </div>
                            <div class="lc-block text-center mb-3">
                                <div editable="rich">
                                    <h3 class="fw-light">Nama Jastip</h3>
                                </div>
                            </div>
                            <div class="lc-block text-center mb-4">
                                <div editable="rich">
                                    <p class="small text-muted">Alamat Jastip</p>
                                </div>
                            </div>
                            <div class="lc-block text-center">
                                <button class="btn btn-danger" type="button">Hubungi Jastip</button>
                            </div>
                        </div>

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

</body>

</html>
