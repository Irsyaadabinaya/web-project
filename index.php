
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WELCOME | LOGIN</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="linearis.css">
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

    <!-- login -->
    <div class="wrapper">
    <div class="signup">
    <h2>Selamat Datang</h2>
    <form  action="authen_login.php" method="post">
      <input type="text" name="user_id" value="" placeholder="username"> <br>
      <input type="password" name="user_pass" value="" placeholder="password"> <br>
      <a href="newpass.php">lupa kata sandi?<br> </a>
      <input type="submit" name="" value="Sign in">
    </form>
    </div>
    <div class="newacc">
      Don't have an account? <a href="register.php">Sign Up</a>

    </div>

    </div>


  </body>
</html>
