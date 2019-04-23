<?php
//mengaktifkan session php
session_start();
session_destroy();
//menghubungkan dengan koneksi
include 'koneksdexAdmini.php';

//menangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menghitung jumlah data yang ditemukan
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password = 'password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:indexAdmin.php");
}else{
	header("location:index.php?pesan=gagal");
}

?>