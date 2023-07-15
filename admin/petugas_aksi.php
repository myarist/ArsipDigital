<?php
include '../koneksi.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);


$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
	mysqli_query($koneksi, "insert into petugas values (NULL,'$nama','$username','$password','', '1')");
	header("location:petugas?alert=tambah_sukses");
} else {
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (!in_array($ext, $allowed)) {
		header("location:petugas?alert=tambah_gagal");
	} else {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/' . $rand . '_' . $filename);
		$file_gambar = $rand . '_' . $filename;
		mysqli_query($koneksi, "insert into petugas values (NULL,'$nama','$username','$password','$file_gambar','1')");
		header("location:petugas?alert=tambah_sukses");
	}
}
