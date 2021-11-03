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
			<li><a href="index.php?page=religi">RELIGI</a></li>
			<li><a href="index.php?page=kuliner">KULINER</a></li>
			<li><a href=index.php?page=alam">ALAM</a></li>
	</ul>
    </nav>
    </header>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'alam':
				include "halaman/beranda_alam.php";
				break;
			case 'kuliner':
				include "halaman/beranda_kuliner.php";
				break;
			case 'religi':
				include "halaman/beranda_religi.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/alam.php";
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
