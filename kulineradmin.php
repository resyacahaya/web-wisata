<?php
include'login.php';
$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kuliner Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/berandaadmin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2><img src="../img/logoamazingkalselputih.png"></a></h2>
        <div class="menu">
          <ul>
            <li><a href="berandaadmin.php"><img src="../img/admin/icon-home.png">Home</a></li>
            <li><a href="alamadmin.php"><img src="../img/admin/icon-alam.png">Alam</a></li>
            <li><a href="kulineradmin.php"><img src="../img/admin/icon-kuliner.png">Kuliner</a></li>
            <li><a href="religiadmin.php"><div class="religi"><img src="../img/admin/icon-religi.png">Religi</div></a></li>
          </ul> 
        </div>
    </div>
    <div class="main_content">
        <div class="header1">
          <b>Admin</b><button type="button">Logout</button>
        </div>
    </div>
</div>

</body>
</html>