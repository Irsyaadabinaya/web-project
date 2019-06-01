<html>
  <head>
    <meta charset="utf-8">
    <title>Buat Akun baru</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="linearis.css"> -->
  </head>
  <body>
    <!-- navigasi -->
    <div class="navigasi">
      <ul>
        <li> <img src="gambar/logo.png" alt="" height="50px" width="50px"> </li>
        <li> <a href="#"> IPusLamp </a>  </li>
        <li style="float:right"> <a href="home.php">Bantuan</a> </li>
        <li style="float:right"> <a href="aboutus.php">Tentang Kami</a> </li>
        <li style="float:right"> <a href="koleksi.php">Koleksi Buku</a> </li>
        <li style="float:right"> <a href="profil.php">Profil</a> </li>
        <li style="float:right"> <a href="index.php">Beranda</a> </li>
      </ul>
    </div>

    <!-- login -->
    <div class="wrapper">
      <div class="signup">
        <h2>Selamat Datang</h2>
        <form class="signup" action="register.php" method="post">
          <input type="text" name="nama" placeholder="Nama">
          <input type="text" name="user_id" placeholder="Nama Pengguna">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="user_pass" placeholder="Kata Sandi">
          <input type="password" name="password" placeholder="Konfirmasi Kata Sandi">
          <input type="submit" name="Submit" value="Daftar">
          <input type="reset" value="Reset">
        </form>
      </div>
    </div>
    <?php
    if(isset($_POST['Submit'])){
    	$nama=$_POST['nama'];
    	$user_id=$_POST['user_id'];
    	$email=$_POST['email'];
      if ($_POST['user_pass'] != $_POST['password']) {
        echo "Password tidak sama.";
        exit();
      }
      $user_pass=$_POST['user_pass'];

    	include_once("koneksi.php");
    	$result=mysqli_query($koneksi, "INSERT INTO user VALUES('','$user_id','$user_pass','$nama','$email')");

    	echo "Data berhasil disimpan. <a href='index.php'>Login</a>";
    }
    ?>
  </body>
</html>
