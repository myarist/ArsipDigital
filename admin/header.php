<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">
    <link rel="icon" type="image/png" href="../assets/img/logo/logosn.png" sizes="32x32" />
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php
    include '../koneksi.php';
    session_start();
    if ($_SESSION['status'] != "admin_login") {
        header("location:../login.php?alert=belum_login");
    }
    ?>

    <style type="text/css">
        .dropup {
            position: relative;
            display: inline-block;
        }

        .dropup-menu {
            display: none;
            position: absolute;
            bottom: 0;
            right: auto;
            left: 100%;
            background-color: #f1f1f1;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: left;
        }

        .dropup:hover .dropup-menu {
            display: block;
            margin-top: 0;
        }


        .dropup-mobile {
            position: relative;
            display: inline-block;
        }

        .dropup-mobile-menu {
            display: none;
            position: absolute;
            bottom: 100%;
            right: 0;
            left: 0;
            background-color: #f1f1f1;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="#"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="../assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="index" class="<?php echo ($active == 'index') ? "bg-info" : "" ?>">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="kategori" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                        </li> -->


                        <li>
                            <a href="user" class="<?php echo ($active == 'user') ? "bg-info" : "" ?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Master</span></a>
                        </li>

                        <li>
                            <a href="petugas" class="<?php echo ($active == 'petugas') ? "bg-info" : "" ?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                        </li>

                        <!-- <li>
                            <a href="arsip" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                        </li> -->

                        <li>
                            <a href="panduan" class="<?php echo ($active == 'panduan') ? "bg-info" : "" ?>" aria-expanded="false"><span class="educate-icon educate-library icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Panduan </span></a>
                        </li>

                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>



                        <!-- <li>
                            <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                        </li> -->


                        <!-- <li>
                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                        </li> 

                        <li>
                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                        </li> -->




                        <li class="nav-item dropup">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <?php
                                $id_admin = $_SESSION['id'];
                                $profil = mysqli_query($koneksi, "select * from admin where admin_id='$id_admin'");
                                $profil = mysqli_fetch_assoc($profil);
                                if ($profil['admin_foto'] == "") {
                                ?>
                                    <img class="img-circle" src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                <?php } else { ?>
                                    <img class="img-circle" src="../gambar/admin/<?php echo $profil['admin_foto'] ?>" style="width: 20px;height: 20px">
                                <?php } ?>
                                <span><i class="fa fa-space" aria-hidden="true"></i></span>
                                <span><i class="fa fa-space" aria-hidden="true"></i></span>
                                <span class="admin-name mini-click-non"><?php echo $_SESSION['nama']; ?> <!--[ <b>Administrator</b> ]--></span>
                                <i class=" edu-icon edu-up-arrow"></i>
                            </a>
                            <ul role="menu" class=" slideInUp author-log dropup-menu zoomIn">
                                <li><a href="profil"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                <li><a href="gantipassword"><span class="edu-icon edu-user-rounded author-log-ic"></span>Ganti Password</a></li>
                                <li><a href="logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <!-- <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Sistem Informasi Arsip Digital</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li class="active">
                                            <a href="index.php">
                                                <span class="educate-icon educate-home icon-wrap"></span>
                                                <span class="mini-click-non">Dashboard</span>
                                            </a>
                                        </li>
                                        <!--<li>
                                            <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                                        </li> -->



                                        <li>
                                            <a href="petugas.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                                        </li>

                                        <li>
                                            <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                                        </li>

                                        <li>
                                            <a href="panduan" aria-expanded="false"><span class="educate-icon educate-library icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">SOP dan Panduan </span></a>
                                        </li>

                                        <li class="nav-item dropup-mobile">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <?php
                                                $id_admin = $_SESSION['id'];
                                                $profil = mysqli_query($koneksi, "select * from admin where admin_id='$id_admin'");
                                                $profil = mysqli_fetch_assoc($profil);
                                                if ($profil['admin_foto'] == "") {
                                                ?>
                                                    <img class="img-circle" src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                <?php } else { ?>
                                                    <img class="img-circle" src="../gambar/admin/<?php echo $profil['admin_foto'] ?>" style="width: 20px;height: 20px">
                                                <?php } ?>
                                                <span><i class="fa fa-space" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-space" aria-hidden="true"></i></span>
                                                <span class="admin-name mini-click-non"><?php echo $_SESSION['nama']; ?> <!--[ <b>Administrator</b> ]--></span>
                                                <i class=" edu-icon edu-up-arrow"></i>
                                            </a>
                                            <ul role="menu" class=" slideInDown author-log dropup-mobile-menu zoomIn">
                                                <li><a href="profil"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                                <li><a href="gantipassword"><span class="edu-icon edu-user-rounded author-log-ic"></span>Ganti Password</a></li>
                                                <li><a href="logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                            </ul>
                                        </li>

                                        <!-- <li>
                                            <a href="user.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data User</span></a>
                                        </li>

                                        

                                        <li>
                                            <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                                        </li>

                                        <li>
                                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                                        </li>

                                        <li>
                                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>