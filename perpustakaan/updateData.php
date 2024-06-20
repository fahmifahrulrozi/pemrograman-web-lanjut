<?php 
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from buku where kdbuku='$_GET[ubah]'");
$data=mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>UBAH DATA BUKU</h3>
		<form method="POST">
		<table>
			<tr>
				<td>Kode Buku</td>
				<td>= &emsp;</td>
				<td><input type="text" name="kd" value="<?php echo $data['kdbuku']; ?>"></td>
			</tr>
			<tr>
				<td>Judul Buku &emsp;</td>
				<td>=</td>
				<td><input type="text" name="judul" value="<?php echo $data['jdlbuku']; ?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>=</td>
				<td><input type="text" name="pnls" value="<?php echo $data['penulis']; ?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>=</td>
				<td><input type="text" name="pnbt" value="<?php echo $data['penerbit']; ?>"></td>
			</tr>
		</table>
		<br><input type="submit" name="proses" value="Proses!">
		</form>
	</center>
</body>
</html>

<?php 
include "koneksi.php";
if (isset($_POST['proses'])){
	$kd = $_POST['kd'];
	$judul = $_POST['judul'];
	$pnls = $_POST['pnls'];
	$pnbt = $_POST['pnbt'];

	mysqli_query($koneksi, "update buku set
	jdlbuku = '$judul',
	penulis = '$pnls',
	penerbit = '$pnbt'
	where kdbuku = '$_GET[ubah]'");

	echo "<script>alert('Data buku berhasil diubah')</script>";
	echo "<meta http-equiv=refresh content=1;URL='tabelPerpus.php'>";
} ?>