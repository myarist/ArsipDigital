<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$konfirmasi_password = $_POST['konfirmasi_password'];
$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$passwordlama'");

$cek = mysqli_num_rows($admin);
if ($cek > 0) {
    if ($_POST['passwordbaru'] != $_POST['konfirmasi_password']) {
        header("location:gantipassword?alert=verify_gagal");
        die;
    }
    mysqli_query($koneksi, "UPDATE admin SET admin_password='$passwordbaru' WHERE admin_id='$id'");

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
