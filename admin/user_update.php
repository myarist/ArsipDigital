<?php
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$konfirmasi_pwd = $_POST['konfirmasi_password'];
$password = md5($_POST['password']);

// cek gambar
$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if ($pwd == "" && $filename == "") {
	if ($pwd != $konfirmasi_pwd) {
		var_dump("echo sini");
		header("location:user_edit?id=$id&alert=verify_gagal");
		die;
	}

	mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username' where user_id='$id'");
	header("location:user?alert=edit_sukses");
} elseif ($pwd == "") {
	if ($pwd != $konfirmasi_pwd) {
		var_dump("echo sini");
		header("location:user_edit?id=$id&alert=verify_gagal");
		die;
	}

	if (!in_array($ext, $allowed)) {
		header("location:user?alert=edit_gagal");
	} else {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
		$x = $rand . '_' . $filename;
		mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_foto='$x' where user_id='$id'");
		header("location:user?alert=edit_sukses");
	}
} elseif ($filename == "") {
	if ($pwd !== $konfirmasi_pwd) {
		//Konfirmasi Password
		header("location:user_edit?id=$id&alert=verify_gagal");
		die;
	}
	mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_password='$password' where user_id='$id'");
	header("location:user?alert=edit_sukses");
}
