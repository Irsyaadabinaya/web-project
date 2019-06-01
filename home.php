<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>iPusLamp | Beranda</title>

    <!-- css -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- navigasi -->
    <div class="navigasi">
      <ul>
        <li> <img src="gambar/logo.png" height="60px" width="50px"> </li>
        <li> <a href="home.php">IPusLamp <br> Perpustakaan Daerah Provinsi Lampung </a>  </li>
        <li style="float:right"> <a href="aboutus.php">Tentang Kami</a> </li>
        <li style="float:right"> <a href="bantuan.php">Bantuan</a> </li>
        <li style="float:right"> <a href="rakbuku.php">Rak Buku</a> </li>
        <li style="float:right"> <a href="koleksi.php">Koleksi Buku</a> </li>
        <li style="float:right"> <a href="profil.php">Profil</a> </li>
        <li style="float:right"> <a href="home.php">Beranda</a> </li>

      </ul>
    </div>

    <!-- belanda eh beranda -->
    <div class="searchbar">
      Cari <input type="text" name="" value="">
      <br>
      <br>
    </div>
    <div class="bookshelf">
      <table width='80%' border=0>
      	<?php
        include_once("koneksi.php");
      	$result = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC");
      	while ($user_data = mysqli_fetch_array($result)) {
      		echo "<tr>";
          echo "<td><img height=50px weight=50px src='block.jpg'></td>";
      		echo "<td>".$user_data['judul']."</td>";
      		echo "<td>".$user_data['pengarang']."</td>";
      		}
      	?>
      		</table>

    </div>


    <footer>
     <p>Ada masukan untuk kami?</p>
     <p><a href="feedback.php">Klik disini</a>.</p>
    </footer>

  </body>
</html>
