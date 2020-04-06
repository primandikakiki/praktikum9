<?php 
include ("koneksi_inc.php");

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
	// mengaktifkan session php
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:cetak.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>