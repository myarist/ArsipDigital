<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Kategori</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Kategori</span></li>
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
            <h3 class="panel-title">Data kategori</h3>
        </div>
        <div class="panel-body">


            <div class="pull-right">
                <a href="kategori_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah kategori</a>
            </div>

            <br>
            <br>
            <br>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>Katerangan</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($p = mysqli_fetch_array($kategori)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p['kategori_nama'] ?></td>
                            <td><?php echo $p['kategori_keterangan'] ?></td>
                            <td class="text-center">
                                <?php
                                if ($p['kategori_id'] != 1) {
                                ?>

                                    <div class="modal fade" id="modalKategori<?php echo $p['kategori_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalKategoriLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalKategoriLabel">PERINGATAN!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus kategori ini? <br>kategori akan dihapus secara permanen.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                    <a href="kategori_hapus.php?id=<?php echo $p['kategori_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="btn-group">
                                        <a href="kategori_edit?id=<?php echo $p['kategori_id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                        <!-- <a href="kategori_hapus.php?id=<?php echo $p['kategori_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalKategori<?= $p['kategori_id'] ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                <?php
                                }
                                ?>
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