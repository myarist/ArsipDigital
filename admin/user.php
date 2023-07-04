<?php $active = "user"; ?>

<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Master</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Master</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Master</h3>
        </div>
        <div class="panel-body">

            <div class="pull-right">
                <a href="user_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Master</a>
            </div>
            <br>
            <br>
            <br>

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY user_id DESC");
                    while ($p = mysqli_fetch_array($user)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <?php
                                if ($p['user_foto'] == "") {
                                ?>
                                    <img class="img-user" src="../gambar/sistem/user.png">
                                <?php
                                } else {
                                ?>
                                    <img class="img-user" src="../gambar/user/<?php echo $p['user_foto']; ?>">
                                <?php
                                }
                                ?>


                                <div class="modal fade" id="modalMaster<?php echo $p['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalMasterLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalMasterLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus akun master ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="user_hapus.php?id=<?php echo $p['user_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><?php echo $p['user_username'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="user_edit?id=<?php echo $p['user_id']; ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalMaster<?= $p['user_id'] ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>