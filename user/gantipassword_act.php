<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$konfirmasi_password = $_POST['konfirmasi_password'];
$user = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$passwordlama'");

$cek = mysqli_num_rows($user);
if ($cek > 0) {
    if ($_POST['passwordbaru'] != $_POST['konfirmasi_password']) {
        header("location:gantipassword?alert=verify_gagal");
        die;
    }
    mysqli_query($koneksi, "UPDATE user SET user_password='$passwordbaru' WHERE user_id='$id'") or die(mysqli_errno());

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
