<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>FORM DATA MAHASISWA</h3>
		<form method="POST">
		<table>
			<tr>
				<td>NPM</td>
				<td>= &emsp;</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa &emsp;&emsp;</td>
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
				<td><input type="text" name="alm"></td>
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
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$alm = $_POST['alm'];

	mysqli_query($koneksi, "insert into mahasiswa set
	npm = '$npm',
	namamhs = '$nama',
	nohp = '$hp',
	alamat = '$alm'");

	echo "Data Mahasiswa baru berhasil diinput";
	echo "<meta http-equiv=refresh content=1;URL='tabelmahasiswa.php'>";
} ?>