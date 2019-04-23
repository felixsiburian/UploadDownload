<?php 
//tentukan folder file yang boleh di download
$folder = "files/";
//cek menggunakan fungsi exist
if(!file_exists($folder.$_GET['file'])){
	echo "<h1>Access Forbidden</h1>
			<p>Anda tidak dapat mendownload file ini</p>";
	echo "<a href=\"index.php\">Kembali</a>";
	exit;
}

//mendownload file di folder files
else{
	echo ''.$_GET['file'];
	header('Location: ./files/'.$_GET['file']);
	// header("Content-Description: File Transfer");
	// header("Content-Type: application/octet-stream");
	// header("Content-Disposition: attachment; 
 //  filename=\"".$_GET['file']."\"");

	// $fp = fopen($folder.$_GET['file'],"r");
	// $data = fread($fp, filesize($folder.$_GET['file']));
	// fclose($fp);
	// print $data;
}
?>