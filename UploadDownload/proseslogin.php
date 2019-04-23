 <?php
include "koneksi.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:downloadAdmin.php');
}
else
{
  echo "<h2><center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br></h2>";
    echo "<br>";
  echo "<center>Jika anda admin, klik untuk mengulangi  <input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";
  	echo "<br>";
  echo "<center>Jika anda <b>BUKAN ADMIN</b> klik untuk kembali  <input class='btn btn-blue' type=button value='Kembali' onclick=location.href='index.php'></a></center>";

}
?>
