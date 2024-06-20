<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>FORM DATA ANGGOTA</h3>
		<form method="POST">
		<table>
			<tr>
				<td>Kode Anggota</td>
				<td>= &emsp;</td>
				<td><input type="text" name="kd"></td>
			</tr>
			<tr>
				<td>Nama Anggota &emsp;</td>
				<td>=</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>=</td>
				<td><input type="text" name="hp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>=</td>
				<td><input type="text" name="almt"></td>
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
	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$almt = $_POST['almt'];

	mysqli_query($koneksi, "insert into anggota set
	kdanggota = '$kd',
	nmanggota = '$nama',
	nohp = '$hp',
	alamat = '$almt'");

	echo "<script>alert('Data Anggota baru telah tersimpan')</script>";
	echo "<meta http-equiv=refresh content=1;URL='tabelAnggota.php'>";
} ?>