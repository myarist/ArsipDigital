<?php include 'header.php'; ?>


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Ganti Password</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Ganti Password</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <div class="panel">

                <div class="panel-heading">
                    <!-- <h3 class="panel-title">Ganti Password</h3> -->
                </div>

                <div class="panel-body">

                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "sukses") {
                            echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                        } elseif ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger'>Password lama tidak sama!</div>";
                        } elseif ($_GET['alert'] == "verify_gagal") {
                            echo "<div class='alert alert-danger'>Konfirmasi password tidak sesuai!</div>";
                        }
                    }
                    ?>

                    <form action="gantipassword_act.php" method="post">
                        <div class="form-group">
                            <label>Masukkan Password Lama</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password Lama .." name="passwordlama" required="required" min="5">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Password Baru</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password Baru .." name="passwordbaru" required="required" min="5">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Password .." name="konfirmasi_password" required="required" min="5">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>