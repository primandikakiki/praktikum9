<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
</head>
<body>
	<center><h2> Login </h2></center>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<form method="POST" action="cek_login.php"> 
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Masukkan username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Masukkan password"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="LOGIN"></td>
		</tr>
	</table>			
	</form>
</body>
</html>