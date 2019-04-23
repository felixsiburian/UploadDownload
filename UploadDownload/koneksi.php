<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'file_db';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or
die('koneksi gagal');
?>