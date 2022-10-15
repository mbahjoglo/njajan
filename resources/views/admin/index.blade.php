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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->email }}</span>
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
            <h1>Dashboard</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Home Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Setting</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="pages-home">Edit Home</a></li>
                                    </ul>
                                </div>
                                @foreach ($homes as $isi)
                                    <div class="card-body">
                                        <h5 class="card-title">Home <span>| njajan</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-house-door"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="card-title">{{ $isi->judul }}</h5>
                                            </div>
                                        </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <!-- End Home Card -->

                    <!-- Makanan Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="pages-menu-makanan" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Makanan</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="pages-menu-makanan">Daftar Makanan</a></li>
                                    <li><a class="dropdown-item" href="input-produk-makanan">Input Makanan</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Makanan <span>| njajan</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-egg-fried"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $hitungmakanans }}</h6>
                                        <span class="text-muted small pt-2 ps-1">produk</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Produk Sales Card -->

                    <!-- Minuman Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Minuman</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">open produk</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Minuman <span>| njajan</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cup-straw"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $hitungminumans }}</h6>
                                        <span class="text-muted small pt-2 ps-1">produk</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Produk Sales Card -->

                    <!-- Penjual Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Penjual</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">open penjual</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Penjual <span>| njajan</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $hitungpenjuals }}</h6>
                                        <span class="text-muted small pt-2 ps-1">penjual</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Penjual Card -->

                    <!-- Pasar Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Pasar</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">open pasar</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pasar <span>| njajan</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $hitungpasars }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Pasar</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Pasar Card -->


                    <!-- Testimoni Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Testimoni</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="tables-testimoni">Table Testimoni</a></li>
                                    <li><a class="dropdown-item" href="input-testimoni">Input Testimoni</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Testimoni <span>| njajan</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-textarea-t"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $hitungtestimonis }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Testimoni</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Pasar Card -->

                    <!-- Menu Card -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Menu Table</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Table Makanan</a></li>
                                    <li><a class="dropdown-item" href="#">Table Minuman</a></li>

                                    <li class="dropdown-header text-start">
                                        <h6>Menu Input</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Input Makanan</a></li>
                                    <li><a class="dropdown-item" href="#">Input Minuman</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Daftar <span>| Makanan & Minuman</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Penjual</th>
                                            <th scope="col">Pasar</th>
                                            <th scope="col">Harga</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data_makanans as $isi)
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">
                                                        <img width="100"
                                                            src="{{ asset('storage/makanan/' . $isi->foto) }}"
                                                            alt="" title="">
                                                </th>
                                                <td>{{ $isi->nama }}</td>
                                                <td>{{ $isi->penjual }}</td>
                                                <td class="fw-bold">{{ $isi->lokasi }}</td>
                                                <td>{{ $isi->harga }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                    @foreach ($data_minumans as $isi)
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">
                                                        <img width="100"
                                                            src="{{ asset('storage/minuman/' . $isi->foto) }}"
                                                            alt="" title="">
                                                </th>
                                                <td>{{ $isi->nama }}</td>
                                                <td>{{ $isi->penjual }}</td>
                                                <td class="fw-bold">{{ $isi->lokasi }}</td>
                                                <td>{{ $isi->harga }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>

                            </div>

                        </div>
                    </div>
                    <!-- End Menu Card -->

                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Produk Dari Beberapa -->
                <div class="card">
                    <div class="filter">
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Data <span>| njajan.</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Jumlah Data',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: {{ $hitungmakanans }},
                                                name: 'Makanan'
                                            },
                                            {
                                                value: {{ $hitungminumans }},
                                                name: 'Minuman'
                                            },
                                            {
                                                value: {{ $hitungpenjuals }},
                                                name: 'Penjual'
                                            },
                                            {
                                                value: {{ $hitungpasars }},
                                                name: 'Pasar'
                                            },
                                            {
                                                value: {{ $hitungtestimonis }},
                                                name: 'Testimoni'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- Daftar Pasar -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Setting Pasar</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Open Pasar</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Daftar <span>| Pasar</span></h5>

                        <div class="news">

                            @foreach ($data_pasars as $isi)
                                <div class="post-item clearfix">
                                    <img class="mb-3" src="{{ asset('storage/pasar/' . $isi->foto) }}"
                                        alt="">
                                    <h4><a href="#">{{ $isi->nama }}</a></h4>
                                    <p>{{ $isi->alamat }}</p>
                                </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
