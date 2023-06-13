<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$user = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$passwordlama'");

$cek = mysqli_num_rows($user);
if ($cek > 0) {
    $password = md5($_POST['password']);

    mysqli_query($koneksi, "UPDATE user SET user_password='$passwordbaru' WHERE user_id='$id'") or die(mysqli_errno());

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
