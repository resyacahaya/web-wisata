<?
include'koneksilogin.php';

$username =$_POST['username'];
$password =$_POST['password'];

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amazing Kalsel</title>
	<!-- menghubungkan dengan file css -->
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/login.css">
    </head>
<body>
    <div class="top-wrapper">
        <div class="header">
 	<img src="../img/logoamazingkalsel.png" alt="logo">
</div>
  <div style="display: flex;">
  <div class="container-left">
    <img src="../img/login.png" alt="foto">
  </div>
  <aside>
        <div class ="card">
        <div class="container-right"> 
          <div calss="col-1">
         <center> <h1>LOGIN ADMIN</h1></center> <br>
         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <form action="koneksilogin.php" method="post">
              <div ="kotak">
             <input class="kotak" type="text" placeholder="username">
            </div>
            <br>
              <div ="kotak"> 
                <input class="kotak" type="text" placeholder="password"> <br>
              </div>
              <br>
              <div ="button">
              <button type="submit" class="button" value="Masuk"> Masuk</button> 
            </form>
</aside>
        </div>  
</div>   
    </body>
</html>
