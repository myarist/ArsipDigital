<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

// $waktu = date('Y-m-d H:i:s'); 
// $petugas = $_SESSION['id'];
$id  = $_POST['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$tanggal = $_POST['tanggal'];

$rand = rand();

$filename = $_FILES['file']['name'];

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$arsip_status = 'belum diverifikasi';
$arsip_cek = 'perlu pengecekan';

//Cek kode arsip unik ===========================================================================
// $cek_kode = mysqli_query($koneksi, "SELECT arsip_kode FROM arsip");
// $kode_unik = true;
// foreach ($cek_kode as $cek) {
// 	if ($cek['arsip_kode'] == $kode) {
// 		$kode_unik = false;
// 	}
// }
// if ($kode_unik == false) {
// 	header("location:arsip_tambah?alert=kode_gagal&tanggal=$tanggal&nama=$nama&kategori=$kategori&keterangan=$keterangan");
// 	die;
// }



// validasi tanggal upload arsip ================================================================
//$tanggal = Time::now('Asia/Jakarta');
$tahun_now = date('Y');
$bulan_now = date('m');
$tanggal_now = date('d');
list($tahun_upload, $bulan_upload, $tanggal_upload) = explode('-', $_POST['tanggal']);

if ($tahun_upload > $tahun_now) {
	header("location:arsip_tambah?alert=tanggal_gagal&tanggal=$tanggal&nama=$nama&kategori=$kategori&keterangan=$keterangan");
	die;
} elseif ($tahun_upload == $tahun_now) {
	if ($bulan_upload > $bulan_now) {
		header("location:arsip_tambah?alert=tanggal_gagal&tanggal=$tanggal&nama=$nama&kategori=$kategori&keterangan=$keterangan");
		die;
	} elseif ($bulan_upload == $bulan_now) {
		if ($tanggal_upload > $tanggal_now) {
			header("location:arsip_tambah?alert=tanggal_gagal&tanggal=$tanggal&nama=$nama&kategori=$kategori&keterangan=$keterangan");
			die;
		}
	}
}



if ($filename == "") {

	mysqli_query($koneksi, "UPDATE arsip SET arsip_kode='$kode', arsip_nama='$nama', arsip_kategori='$kategori', arsip_keterangan='$keterangan', tanggal_arsip='$tanggal', arsip_cek='$arsip_cek' where arsip_id='$id'") or die(mysqli_error($koneksi));
	header("location:arsip?alert=edit_sukses");
} else {

	$jenis = pathinfo($filename, PATHINFO_EXTENSION);

	if ($jenis == "php") {
		header("location:arsip?alert=edit_gagal");
	} else {

		// hapus file lama
		$file_lama = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
		$file = mysqli_fetch_assoc($file_lama);
		$nama_file_lama = $file['arsip_file'];
		unlink("../arsip/" . $nama_file_lama);


		// upload file baru
		move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/' . $rand . '_' . $filename);
		$nama_file = $rand . '_' . $filename;
		mysqli_query($koneksi, "UPDATE arsip SET arsip_kode='$kode', arsip_nama='$nama', arsip_jenis='$jenis', arsip_kategori='$kategori', arsip_keterangan='$keterangan', arsip_file='$nama_file', tanggal_arsip='$tanggal', arsip_status='$arsip_status', arsip_cek='$arsip_cek' where arsip_id='$id'") or die(mysqli_error($koneksi));
		header("location:arsip?alert=edit_sukses");
	}
}
