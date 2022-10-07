<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Dashboard - NiceAdmin Bootstrap Template</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/admin/img/favicon.png" rel="icon">
<link href="assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/admin/css/style.css" rel="stylesheet">

<!-- =======================================================
* Template Name: NiceAdmin - v2.3.1
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
    
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <a href="indexadmin" class="logo d-flex align-items-center">
            <img src="" alt="">
            <span class="d-none d-lg-block">admin njajan</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="">
                <i class="bi bi-search"></i>
            </a>
            </li><!-- End Search Icon-->
            
            <!--
            <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>30 min. ago</p>
                </div>
                </li>

                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                    <h4>Atque rerum nesciunt</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>1 hr. ago</p>
                </div>
                </li>

                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                    <h4>Sit rerum fuga</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>2 hrs. ago</p>
                </div>
                </li>

                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                    <h4>Dicta reprehenderit</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>4 hrs. ago</p>
                </div>
                </li>

                <li>
                <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
                </li>

            </ul>

            </li>
            -->



            <!--
            <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                <a href="#">
                    <img src="assets/admin/img/messages-1.jpg" alt="" class="rounded-circle">
                    <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                    </div>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                <a href="#">
                    <img src="assets/admin/img/messages-2.jpg" alt="" class="rounded-circle">
                    <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                    </div>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                <a href="#">
                    <img src="assets/admin/img/messages-3.jpg" alt="" class="rounded-circle">
                    <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                    </div>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li class="dropdown-footer">
                <a href="#">Show all messages</a>
                </li>

            </ul>
            

            </li>
            -->

            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{  Auth::user()->name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                <h6>{{  Auth::user()->name }}</h6>
                <span>{{  Auth::user()->email }}</span>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="usersprofile">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="usersprofile">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="indexadmin">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li>
    <!-- End Dashboard Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-home">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-about">
        <i class="bi bi-info-circle"></i>
        <span>About</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="pages-menu-makanan">
            <i class="bi bi-egg-fried"></i><span>Makanan</span>
            </a>
        </li>
        <li>
            <a href="pages-menu-minuman">
            <i class="bi bi-cup-straw"></i><span>Minuman</span>
            </a>
        </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-pasar">
        <i class="bi bi-shop"></i>
        <span>Pasar</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact">
        <i class="bi bi-telephone"></i>
        <span>Contact</span>
        </a>
    </li>

    <li class="nav-heading">Input</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="input-penjual">
        <i class="bi bi-person"></i>
        <span>Penjual</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="input-pasar">
        <i class="bi bi-shop"></i>
        <span>Pasar</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#produk-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-journal-text"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="produk-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="input-produk-makanan">
            <i class="bi bi-circle"></i><span>Makanan</span>
            </a>
        </li>
        <li>
            <a href="input-produk-minuman">
            <i class="bi bi-circle"></i><span>Minuman</span>
            </a>
        </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="input-testimoni">
        <i class="bi bi-textarea-t"></i>
        <span>Testimoni</span>
        </a>
    </li>

    <li class="nav-heading">Table</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="tables-penjual">
        <i class="bi bi-person"></i>
        <span>Penjual</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="tables-testimoni">
        <i class="bi bi-textarea-t"></i>
        <span>Testimoni</span>
        </a>
    </li>

    </ul>

</aside>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Home</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-fix.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Home</li>
        </ol>
    </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">

    <div class="card">
    <div class="card-body">
        <h5 class="card-title">View Home Page</h5>

        @foreach ($homes as $isi)
        <!-- General Form Elements -->
        <form method="POST" action="{{ url('pages-home/'.$isi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="{{  $isi->judul  }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" name="deskripsi">{{  $isi->deskripsi  }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Link Video</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="link" value="{{  $isi->link  }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Foto Sekarang</label>
            <div class="col-sm-10">
            <img class="col-sm-2 col-form-label" src="{{ asset('storage/home/'.$isi->foto) }}">
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Foto Upload</label>
            <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile" name="foto">
            <input class="form-control" type="hidden" id="formFile" name="fotolama" value="{{ $isi->foto }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Yakin Udpate Data ?')">Update</button>
            </div>
        </div>

        </form>
        @endforeach
        <!-- End General Form Elements -->

    </div>
    </div>

    </section>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/admin/vendor/chart.js/chart.min.js"></script>
<script src="assets/admin/vendor/echarts/echarts.min.js"></script>
<script src="assets/admin/vendor/quill/quill.min.js"></script>
<script src="assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/admin/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/admin/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/admin/js/main.js"></script>

</body>

</html>