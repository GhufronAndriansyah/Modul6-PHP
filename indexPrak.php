<head>
<link rel="stylesheet" href="Style1.css" type="text/css">
</head>
<?php
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login.php");
}
?>
<body>
<h1 align="center">Selamat Datang</h1> <br>
<h2 align="center">Selamat Datang</h2> <br>
<h3 align="center">Selamat Datang</h3> <br>
<h4 align="center">Selamat Datang</h4> <br>
<h5 align="center">Selamat Datang</h5> <br>
<h6 align="center">Selamat Datang</h6> <br>
<a href="?m=logout"><button type="button" class="cancelbtn">Logout</button></a>
<?php
if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    session_destroy();
    echo header("location:login.php");
}
?>
</body>
