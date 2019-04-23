 <html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
          body{
  font-family: sans-serif;
  background: #ffffff;
}
 
h1{
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}
 
.tulisan_login{
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
  color: white;
}
 
.kotak_login{
  width: 550px;
  background: #333;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
  box-sizing: border-box;
}
 
label{
  font-size: 11pt;
}
 
.form_login{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;

}
 
.tombol_login{
  background: #4caf50;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}
 
.link{
  color: #232323;
  text-decoration: none;
  font-size: 10pt;
}
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
        <h3</div>><a href="login.php" class="active">LOGIN</a></h3>
        <a style="float: left;" href="index.php">HOME</a>
    </div>
      <div class="kotak_login">
        <h2 class="tulisan_login"><center>LOGIN</center></h2>
                <form class="bingkai" action="proseslogin.php" method="POST">
                    <div>
                        <label style="color: white">USERNAME</label>
                        <input class="form_login" type="text" name="username" placeholder="Masukkan Username"/>
                        <br>
                        <label style="color: white">PASSWORD</label>
                        <input class="form_login" type="password" name="password" placeholder="Masukkan Pasword"/>
                    </div>
                    <div class="bawah">
                        <center>
                            <br>
                        <input class="tombol_login" type="submit" name="submit" value="LOGIN">
                        </center>
                    </div>
                </form>
            </div>