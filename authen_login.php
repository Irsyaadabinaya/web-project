<?php
require ('db_connect.php');

if(isset($_POST['user_id']) and isset($_POST['user_pass'])){
  $username = $_POST['user_id'];
  $password = $_POST['user_pass'];
  $query = "SELECT * FROM user WHERE user_id='$username' and user_pass='$password'";

  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if($count==1){
    echo "<script type='text/javascript'>alert('Login Credentials Verified')</script>";
    $query ="UPDATE user SET status_login='1' WHERE user_id='$username'";
		$result= mysqli_query($connection,$query) or die(mysqli_error($connection));
		session_start();
		$_SESSION['login_user']= $username;
    echo "<a href=home.php>Click untuk masuk ke main server!</a>";

  } else {
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    header('Location: index.php');
  }
}
?>
