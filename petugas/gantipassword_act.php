<?php
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$passwordlama'");

$cek = mysqli_num_rows($petugas);
if ($cek > 0) {
    $password = md5($_POST['password']);

    mysqli_query($koneksi, "UPDATE petugas SET petugas_password='$passwordbaru' WHERE petugas_id='$id'") or die(mysqli_errno());

    header("location:gantipassword?alert=sukses");
} else {
    header("location:gantipassword?alert=gagal");
}
