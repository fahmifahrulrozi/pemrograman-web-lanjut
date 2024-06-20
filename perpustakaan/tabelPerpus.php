<p><a href="menu.php">kembali ke menu</a></p>
<center>
	<h3>DATA BUKU PERPUSTAKAAN FAHMI</h3>
	<table border="1">
		<tr>
			<th bgcolor="pink">Kode Buku</th>
			<th bgcolor="pink">Judul Buku</th>
			<th bgcolor="pink">Penulis</th>
			<th bgcolor="pink">Penerbit</th>
			<th bgcolor="pink" colspan="2">Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$a=1;
		$ambildata = mysqli_query ($koneksi,"select * from buku");
		while ($tampil = mysqli_fetch_array($ambildata)){
			echo "
			<tr>
				<td>$tampil[kdbuku]</td>
				<td>$tampil[jdlbuku]</td>
				<td>$tampil[penulis]</td>
				<td>$tampil[penerbit]</td>
				<td><a href='?hapus=$tampil[kdbuku]' onCLick=\"return confirm ('Yakin akan menghapus data?');\">
				<input type='button' value='hapus'></a></td>
				<td><a href='updateData.php?ubah=$tampil[kdbuku]'>
				<input type='button' value='Ubah'></a></td>
			</tr>";
			$a++;
		} ?>
	</table>
	<br>
	<br>
	<p><a href="formBuku.php">Tambah</a> data buku baru</p>
</center>

<?php 
if(isset($_GET['hapus'])){
	mysqli_query($koneksi,"delete from buku where kdbuku='$_GET[hapus]'");

	echo "Data Buku Berhasil Dihapus";
	echo "<meta http-equiv=refresh content=3;URL='tabelPerpus.php'>";
} ?>