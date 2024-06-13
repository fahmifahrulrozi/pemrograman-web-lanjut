<?php 
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from mahasiswa where npm='$_GET[ubah]'");
$data=mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>UBAH DATA MAHASISWA</h3>
		<form method="POST">
		<table>
			<tr>
				<td>NPM</td>
				<td>= &emsp;</td>
				<td><input type="text" name="npm" value="<?php echo $data['npm']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa &emsp;&emsp;</td>
				<td>=</td>
				<td><input type="text" name="nama" value="<?php echo $data['namamhs']; ?>"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>=</td>
				<td><input type="text" name="hp" value="<?php echo $data['nohp']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>=</td>
				<td><input type="text" name="alm" value="<?php echo $data['alamat']; ?>"></td>
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
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$alm = $_POST['alm'];

	mysqli_query($koneksi, "update mahasiswa set
	namamhs = '$nama',
	nohp = '$hp',
	alamat = '$alm'
	where npm = '$_GET[ubah]'");

	echo "Data Mahasiswa berhasil diubah";
	echo "<meta http-equiv=refresh content=0;URL='tabelmahasiswa.php'>";
} ?>