<!-- <?php 

include "koneksi.php";

$output = '';

if(isset($_POST['search'])){
	$search = $_POST['search'];
	$search = preg_replace("#[^0-9a-z]i#", "", $search);
	$konek = mysqli_connect("localhost","root","","file_db");
	$query = mysqli_query($konek,"SELECT * FROM upload WHERE nama_file LIKE '%$search%'") or die("Could not search");
	$count = mysqli_num_rows($query);

	if($count == 0){
		$output = "There was no search results!";
	}else{
		while ($row = mysqli_fetch_array($query)){
			$nama_file = $row['nama_file'];
			$deskripsi = $row['deskripsi'];

			$output .='<div> '.$nama_file.''.$deskripsi. '</div>';
		}
	}
}

?> -->

<!-- <?php 
include 'koneksi.php';
?>
 
<h3>Searching</h3>
 
<form action="search.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
	<?php 
	$konek = mysqli_connect("localhost","root","","file_db");
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($konek,"select * from upload where nama_file like '%".$cari."%'");				
	}else{
		$data = mysqli_query($konek,"select * from upload");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<?php } ?>
 -->