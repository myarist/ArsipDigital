<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js">
    </script>
    <link rel="icon" type="image/png" href="assets/img/logo/logosn.png" sizes="32x32" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- <style>
            form i {
                margin-left: 400px;
                margin-bottom: -30px;
                cursor: pointer;
            }
        </style> -->

    <style>
        .gradient-icon {
            background: -webkit-gradient(linear, left top, left bottom, from(#1E90FF), to(green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: initial;

        }
    </style>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>ARSIP DIGITAL</h3>
                <h4>Sistem Informasi Arsip Digital</h4>

                <br>

                <p>Silahkan login untuk mengakses arsip.</p>

            </div>
            <div class="content-error">
                <?php
                // pesan notifikasi

                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                    } else if ($_GET['alert'] == "logout") {
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                    } else if ($_GET['alert'] == "belum_login") {
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>
                <div class="hpanel">
                    <div class="panel-body">


                        <br>
                        <br>
                        <center>
                            <h4>LOGIN ADMIN / PETUGAS</h4>
                        </center>
                        <br>
                        <br>

                        <form action="periksa_login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Masukkan username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label id="show_hide_password" class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                                <div class="form-group">
                                    <i class="bi bi-eye-slash" id="togglePassword" title="Lihat Password"></i>
                                </div>
                            </div> -->

                            <!-- <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" title="Masukkan password" placeholder="******" required="required" autocomplete="off">
                                <i class="bi bi-eye-slash" id="togglePassword" title="Lihat Password"></i>
                            </div> -->

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input class="form-control" type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password">
                                    <div class="input-group-addon">
                                        <a style="background-color: white; height: 16px; width: 20px; margin-top: -5px;" href="">
                                            <i class="bi bi-eye-slash gradient-icon " aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="form-group">
                                <label class="control-label" for="password">Hak Akses</label>
                                <select class="form-control" name="akses">
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Pegawai</option>
                                </select>
                                
                            </div> -->

                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>

                        <br>

                    </div>
                </div>

                <a href="index">Kembali</a>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. All rights reserved. Sistem Informasi Arsip Digital (SIAD)</p>
            </div>
        </div>
    </div>




    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


    <!-- <script type="text/javascript">
	$("#password").password('toggle');
    </script> -->

    <!-- <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script> -->

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash");
                    $('#show_hide_password i').removeClass("bi-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash");
                    $('#show_hide_password i').addClass("bi-eye");
                }
            });
        });
    </script>
</body>

</html>