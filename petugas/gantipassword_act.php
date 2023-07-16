<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$konfirmasi_password = $_POST['konfirmasi_password'];
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$passwordlama'");

$cek = mysqli_num_rows($petugas);
if ($cek > 0) {
    if ($_POST['passwordbaru'] != $_POST['konfirmasi_password']) {
        header("location:gantipassword?alert=verify_gagal");
        die;
    }

    mysqli_query($koneksi, "UPDATE petugas SET petugas_password='$passwordbaru' WHERE petugas_id='$id'");

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
