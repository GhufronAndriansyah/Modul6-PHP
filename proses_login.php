<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="Ghufron" AND $password=="andri")
{
 $_SESSION["username"]=$username;
 header("location:indexPrak.php");
}else{
 header("location:login.php?login_error");
}
?>
