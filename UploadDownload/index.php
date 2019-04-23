<html>
<title>Aplikasi Download </title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		padding: 5px;
	}
	.topnav{
		overflow:hidden;
  background-color: #333;
	}
	.topnav a {
		float: right;
		 padding: 14px 16px;
		  color: #f2f2f2;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
	}
	.topnav a:hover{
		background-color: #ddd;
  color: black;
	}

	.topnav a.active{
	background-color: #4CAF50;
  	color: white;
	}

	.search {
		float: right;
	}
	.logo {
		float: left;
		margin: 0 auto;
	}
</style>
<body>
	<div class="row">
	<div class="col-sm-4"><img src="DJP.png"></div>
	<div class="col-sm-4" style="text-align: center"><h2>Portal Data
				Kanwil Riau
			</h2>			
			</div>
	<div class="col-sm-4"><img src="kemenkeu.png" style="float: right;"></div>
	</div>
	<div class="topnav">
		<h3</div>><a href="login.php">LOGIN</a></h3>
		<a style="float: left;" class="active" href="index.php">HOME</a>
	</div><br>
<!-- 
	 <a href="login.php"><h3 style="text-align: right">Login</h3></a> -->
	<!--Search bar -->
	<div class="search">
	<form action="#" method="get" >
	<input type="text" name="cari">
	<input type="submit" value="Cari">
	<button><a href=index.php>Kembali</a></button>
</div>
	</form>		
	<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
?>
<br><br>
<?php 
	$konek = mysqli_connect("localhost","root","","file_db");
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($konek,"select * from upload where nama_file like '%".$cari."%' OR deskripsi like '%".$cari."%'");				
	}else{
		$data = mysqli_query($konek,"select * from upload");		
	}
	$no = 1;
	while($r = mysqli_fetch_array($data)){
		echo "Nama File : <b>$r[nama_file]</b><br>";
		echo "Deskripsi : $r[deskripsi]<br>";
		echo '<a href="./simpan.php?file='.$r['nama_file'].'">Download File</a><hr><br>';
	?>
	<?php } 

	}else{
		?>


<br><br>
<?php 
	$konek = mysqli_connect("localhost","root","","file_db");
	$query = "SELECT * FROM upload ORDER BY id_upload DESC";
	$hasil = mysqli_query($konek, $query);

	while($r = mysqli_fetch_array($hasil)){
		echo "Nama File : <b>$r[nama_file]</b><br>";
		echo "Deskripsi : $r[deskripsi]<br>";
		echo '<a href="./simpan.php?file='.$r['nama_file'].'">Download File</a><hr><br>';
	}
}
