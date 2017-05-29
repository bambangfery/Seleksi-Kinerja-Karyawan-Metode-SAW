<?php
session_start();
isset($_SESSION['sesi']) ? $_SESSION['sesi'] : '';
include "include/connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
//periksa login
	$query	= mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
	$sesi	= mysql_num_rows($query);
	
	if ($sesi == 1) {
	$data_admin	= mysql_fetch_array($query);
	
	$_SESSION['sesi'] = $data_admin['username'];
	
	echo "<script>alert('Anda berhasil Log In : $username');</script>";
	echo "<meta http-equiv='refresh' content='0; url=admin/index.php?user=$username'>";

	} else {
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	echo "<script>alert('username atau password salah.');</script>";
	}

?>
