<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$ulang_password=$_POST['ulang'];

if ($password==$ulang_password) {
  //security multi layer
  //1. hash MD5
  $hash_md5=md5($password);

  //2. hash bcyrpt
  $bcrypt=password_hash($hash_md5,PASSWORD_DEFAULT);

  $query="INSERT INTO akun VALUES (NULL, '".$username."','".$bcrypt."')";
  $input=mysqli_query($koneksi,$query);
  //memeriksa apakah input sudah benar
  if ($input) {
    //jika berhasil diarahkan ke login.php
    header('location:login.php');
  } else {
    echo "Terjadi kesalahan saat input data <br>";
    echo '<a href="register.php">Kembali</a>';
  }
} else {
  echo "password dan ulang tidak cocok";
  echo '<a href="register.php">Kembali</a>';
}

?>
