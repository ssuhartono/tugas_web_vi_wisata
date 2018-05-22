<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM akun WHERE username='".$username."'";
$hasil=mysqli_query($koneksi,$query);

if ($akun=mysqli_fetch_assoc($hasil)) {
  # username yg ada di database
  $password_db=$akun['password'];
  //security multi layer
  //1. hash MD5
  $hash_md5=md5($password);
  //2. has bcyrpt
  $cek_bcrypt=password_verify($hash_md5,$password_db);
  if ($cek_bcrypt) {
    # jika password benar, masukan data ke session
    session_start();
    $_SESSION['id']=$akun['id'];
    $_SESSION['username']=$akun['username'];
    //arahkan ke index.php
    header('location:index.php');
  }

} else {
  # username tidak ada di database
  echo "Maaf Username Yang Anda Masukan Tidak Ada </br></br>";
  echo '<a href="login.php">Kembali << </a>';
}

 ?>
