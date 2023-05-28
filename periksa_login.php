<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// $akses = $_POST['akses']; 

if ($akses == "") {

	$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['admin_id'];
		$_SESSION['nama'] = $data['admin_nama'];
		$_SESSION['username'] = $data['admin_username'];
		$_SESSION['status'] = "admin_login";

		header("location:admin/");
	} elseif ($akses == "") {

		$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password'");
		$cek = mysqli_num_rows($login);

		if ($cek > 0) {
			session_start();
			$data = mysqli_fetch_assoc($login);
			$_SESSION['id'] = $data['petugas_id'];
			$_SESSION['nama'] = $data['petugas_nama'];
			$_SESSION['username'] = $data['petugas_username'];
			$_SESSION['status'] = "petugas_login";

			header("location:petugas/");
		} elseif ($akses == "") {

			$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
			$cek = mysqli_num_rows($login);

			if ($cek > 0) {
				session_start();
				$data = mysqli_fetch_assoc($login);
				$_SESSION['id'] = $data['user_id'];
				$_SESSION['nama'] = $data['user_nama'];
				$_SESSION['username'] = $data['user_username'];
				$_SESSION['status'] = "user_login";

				header("location:user/");
			} else {
				header("location:login.php?alert=gagal");
			}
		}
	}
}
