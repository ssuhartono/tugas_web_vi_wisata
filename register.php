<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <h1 align="center">DAFTAR</h1>
    <title>Pendaftaran</title>
  </head>
  <body bgcolor="#2980b9">
    <form class="" action="aksi_register.php" method="post" >
      <table align="center">
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" value=""> </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" value=""> </td>
      </tr>
      <tr>
        <td>Ulangi Password</td>
        <td><input type="password" name="ulang" value=""> </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <a href="login.php"><button type="button" name="button">Kembali</button></a>
          <button type="submit" name="button">Simpan</button>
        </td>
      </tr>
    </table>
  </form>
  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
