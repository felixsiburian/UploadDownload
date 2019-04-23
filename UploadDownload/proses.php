<?php
//baca lokasi file sementara
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
//menentukan folder menyimpan file
$folder = "files/$nama_file";
//mengambil tanggal hari ini
$tgl_upload = date("Ymd");
//kondisi file berhasil disimpan
if(move_uploaded_file($lokasi_file, "$folder")){
	echo "Nama File : <b>$nama_file</b> sukses di upload";
	header('location: downloadAdmin.php');

	//masukkan info ke database
		$konek = mysqli_connect("localhost","root","","file_db");

		$query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload) VALUES ('$nama_file','$_POST[deskripsi]','tgl_upload')";

		mysqli_query($konek, $query);
}
else{
	echo "File gagal di upload";
}

?>