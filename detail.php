 <h1>Toko Seberang</h1>
<hr>

<?php
include 'koneksi.php';
$id=$_GET['id'];

//buka session
session_start();
//cek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
  //klu belum login, arahkan ke login.php
  header('location:login.php');
}

$query="SELECT * FROM varang where id='".$id."'";
$hasil=mysqli_query($koneksi,$query);
$no=0;
?>

<table>
	<tr>
	<?php
	while($data= mysqli_fetch_assoc($hasil)){?>
	<?php $no++;?>
	<td>
	<img src="<?php echo $data['gambar'];?>" alt="" width="200px">
	<br>
	<b><?php echo $data['nama'];?></b><br>
	<br>
	</td>
	<td align="justify">
	Deskripsi: <p><?php echo $data['deskripsi'];?></p>
	Harga: <h3>Rp<?php echo $data['harga'];?></h3>

	</td>
    <?php }
	?>
	</tr>
	<tr>
	<td><a href="#"><button type="button"> Beli </button></a></td>
	</tr>
	<tr>
	<td><a href="index.php"><button type="button"> Kembali </button></a></td>
	</tr>
	<br>
</table>
