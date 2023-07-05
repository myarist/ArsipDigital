<?php
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);
$is_active = $_POST['is_active'];
if (!$is_active)
	$is_active = 0;

// cek gambar
$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if ($pwd == "" && $filename == "") {
	mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username', is_active='$is_active' where petugas_id='$id'");
	header("location:petugas");
} elseif ($pwd == "") {
	if (!in_array($ext, $allowed)) {
		header("location:petugas?alert=gagal");
	} else {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/' . $rand . '_' . $filename);
		$x = $rand . '_' . $filename;
		mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username', petugas_foto='$x', is_active='$is_active' where petugas_id='$id'");
		header("location:petugas?alert=berhasil");
	}
} elseif ($filename == "") {
	mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username', petugas_password='$password', is_active='$is_active' where petugas_id='$id'");
	header("location:petugas");
}
