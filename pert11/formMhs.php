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
			<tr>
				<td>Jenis Kelamin</td>
				<td>=</td>
				<td><input type="radio" name="jk" value="Laki-laki">Laki-laki
					<input type="radio" name="jk" value="Perempuan">Perempuan</td>
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
	$jk = $_POST['jk'];

	mysqli_query($koneksi, "insert into mahasiswa set
	npm = '$npm',
	namamhs = '$nama',
	nohp = '$hp',
	alamat = '$alm',
	jenkel = '$jk'");

	echo "Data Mahasiswa baru berhasil diinput";
} ?>