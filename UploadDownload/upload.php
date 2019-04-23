<html>
<title>Form Upload</title>
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
		<a href="logout.php">LOGOUT</a>
		<a style="float: left;" href="downloadAdmin.php">HOME</a>
		<a style="float: left;" class="active" href="upload.php">UPLOAD NEW</a>
	</div><br>
	<form enctype="multipart/form-data" method="POST" action="proses.php" style="font-size: 120%">
<h2>File yang di upload : </h2><input style="font-size: 90%" type="file" name="fupload"><br>
<h4>Deskripsi File : <h4>
<textarea name="deskripsi" rows="8" cols="40"></textarea>
<br><br>
<input type="submit" value="Upload" style="font-size: 90%">
</body>
