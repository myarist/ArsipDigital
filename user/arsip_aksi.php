<?php
include '../koneksi.php';
session_start();

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];

$arsip_id = $_POST['arsip_id'];
$arsip_status = $_POST['arsip_status'];
$arsip_pesan = $_POST['arsip_pesan'];
$arsip_cek = 'sudah dicek'; // kasih keterangan setiap submit

// validasi isian arsip status
if ($arsip_status == 'belum diverifikasi') {
    echo 'alert("Silakan Pilih Status Arsip")';
    header("location:arsip");
    die;
}

mysqli_query($koneksi, "UPDATE arsip SET arsip_status='$arsip_status', arsip_pesan='$arsip_pesan', arsip_cek='$arsip_cek' WHERE arsip_id='$arsip_id'");
header("location:arsip?alert=tambah_sukses");
