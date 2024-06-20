<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>FORM DATA BUKU</h3>
		<form method="POST">
		<table>
			<tr>
				<td>Kode Buku</td>
				<td>= &emsp;</td>
				<td><input type="text" name="kd"></td>
			</tr>
			<tr>
				<td>Judul Buku &emsp;</td>
				<td>=</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>=</td>
				<td><input type="text" name="pnls"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>=</td>
				<td><input type="text" name="pnbt"></td>
			</tr>
		</table>
		<br><input type="submit" name="proses" value="Kirim!">
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

	mysqli_query($koneksi, "insert into buku set
	kdbuku = '$kd',
	jdlbuku = '$judul',
	penulis = '$pnls',
	penerbit = '$pnbt'");

	echo "<script>alert('Data Buku baru telah tersimpan')</script>";
	echo "<meta http-equiv=refresh content=1;URL='tabelPerpus.php'>";
} ?>