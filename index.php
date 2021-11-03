<!DOCTYPE html>
<html>
<head>
	<title>Amazin Kalsel</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<header>
 	<nav>
 	<img src="img/logoamazingkalsel.png" alt="logo">
        <ul>
			<li><a href="index.php?page=home">RELIGI</a></li>
			<li><a href="index.php?page=tentang">KULINER</a></li>
			<li><a href="alam.php?page=alam">ALAM</a></li>
            <li><a href="index.php?page=tutorial">HOME</a></li>
		</ul>
    </nav>
    </header>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>

<div class="footer">
        
		<ul>
			<li><a>Copyright 2021 - Amazing Kalsel</a></li>

		</ul>
	</div>

</div>
</body>
</html>
