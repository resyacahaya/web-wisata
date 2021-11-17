<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Religi Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/alamadmin.css">
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
          <b class="judul">Religi</b> 
          <b class="admin">Admin</b><button type="button">Logout</button>
        </div> 
        <table class="content-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>judul</td>
            <td>deskripsi</td>
            <td>gambar</td>
            <td><button class="editbutton">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
        <!-- <tr class="active-row"> -->
          <tr>
            <td>2</td>
            <td>judul</td>
            <td>deskripsi</td>
            <td>gambar</td>
            <td><button class="editbutton">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>judul</td>
            <td>deskripsi</td>
            <td>gambar</td>
            <td><button class="editbutton">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>judul</td>
            <td>deskripsi</td>
            <td>gambar</td>
            <td><button class="editbutton">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
        </tbody>
        </table>
    </div>
</div>

</body>
</html>