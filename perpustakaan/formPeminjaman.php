<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>FORM PEMINJAMAN BUKU</h3>
		<form method="POST">
		<table>
			<tr>
				<td>Kode Peminjaman</td>
				<td>= &emsp;</td>
				<td><input type="text" name="kd"></td>
			</tr>
			<tr>
				<td>Buku yang ingin dipinjam&emsp;</td>
				<td>=</td>
				<td><select name="kdbk">
					<option>---</option>
					<?php
					include "koneksi.php";
					$query = mysqli_query($koneksi, "select * from buku");
					while($data = mysqli_fetch_array($query)){
						echo "<option value=$data[kdbuku]> $data[jdlbuku]</option>";
					}
					?>
				</select></td>
			</tr>
			<tr>
				<td>Peminjam</td>
				<td>=</td>
				<td><select name="kdpeminjam">
					<option>---</option>
					<?php
					include "koneksi.php";
					$query = mysqli_query($koneksi, "select * from anggota");
					while($data = mysqli_fetch_array($query)){
						echo "<option value=$data[kdanggota]> $data[nmanggota]</option>";
					}
					?>
				</select></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td>=</td>
				<td><input type="date" name="tpinjam"></td>
			</tr>
			<tr>
				<td>Tanggal Pengembalian</td>
				<td>=</td>
				<td><input type="date" name="tkembali"></td>
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
	$kdbk = $_POST['kdbk'];
	$kdpeminjam = $_POST['kdpeminjam'];
	$tpinjam = $_POST['tpinjam'];
	$tkembali = $_POST['tkembali'];

	mysqli_query($koneksi, "insert into peminjaman set
	kdpinjam = '$kd',
	kdbuku = '$kdbk',
	kdanggota = '$kdpeminjam',
	tglpinjam = '$tpinjam',
	tglkembali = '$tkembali'");

	echo "<script>alert('Data Peminjaman baru telah tersimpan')</script>";
	echo "<meta http-equiv=refresh content=0;URL='tabelPeminjaman.php'>";
} ?>