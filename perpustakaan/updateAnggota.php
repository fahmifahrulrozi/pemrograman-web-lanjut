<?php 
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from anggota where kdanggota='$_GET[ubah]'");
$data=mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>UBAH DATA ANGGOTA</h3>
		<form method="POST">
		<table>
			<tr>
				<td>Kode Anggota</td>
				<td>= &emsp;</td>
				<td><input type="text" name="kd" value="<?php echo $data['kdanggota']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Anggota &emsp;</td>
				<td>=</td>
				<td><input type="text" name="nama" value="<?php echo $data['nmanggota']; ?>"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>=</td>
				<td><input type="text" name="hp" value="<?php echo $data['nohp']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>=</td>
				<td><input type="text" name="almt" value="<?php echo $data['alamat']; ?>"></td>
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
	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$almt = $_POST['almt'];

	mysqli_query($koneksi, "update anggota set
	nmanggota = '$nama',
	nohp = '$hp',
	alamat = '$almt'
	where kdanggota = '$_GET[ubah]'");

	echo "<script>alert('Data anggota berhasil diubah')</script>";
	echo "<meta http-equiv=refresh content=1;URL='tabelAnggota.php'>";
} ?>