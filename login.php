<head>
<link rel="stylesheet" href="Style.css" type="text/css">
</head>
<br><br><br><br><br><br><br>
<form method="post" action="proses_login.php" id="login-form">
 <?php 
 if(isset($_GET["login_error"])){ 
   ?>
   <h4 style="color: red; text-align: center;" >Maaf Password atau username salah</h4>
 <?php 
} 
?>
    <br/>
    <div class="container">
    <label><b>Username</b></label>
     <input type="text" name="username" placeholder="Username or Email">
    <label><b>Password</b></label>
     <input type="password" name="password" placeholder="Password">
    <button type="submit" name="commit" class="btn">Login</button>
    </div>
   </form>