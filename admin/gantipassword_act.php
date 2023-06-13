<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$passwordlama'");

$cek = mysqli_num_rows($admin);
if ($cek > 0) {
    $password = md5($_POST['password']);

    mysqli_query($koneksi, "UPDATE admin SET admin_password='$passwordbaru' WHERE admin_id='$id'") or die(mysqli_errno());

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
