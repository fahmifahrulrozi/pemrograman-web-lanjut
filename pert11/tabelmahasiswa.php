<center>
	<h3>DATA MAHASISWA</h3>
	<table border="1">
		<tr>
			<th bgcolor="pink">NPM</th>
			<th bgcolor="pink">Nama Mahasiswa</th>
			<th bgcolor="pink">Nomor HP</th>
			<th bgcolor="pink">Alamat</th>
			<th bgcolor="pink" colspan="2">Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$a=1;
		$ambildata = mysqli_query ($koneksi,"select * from mahasiswa");
		while ($tampil = mysqli_fetch_array($ambildata)){
			echo "
			<tr>
				<td>$tampil[npm]</td>
				<td>$tampil[namamhs]</td>
				<td>$tampil[nohp]</td>
				<td>$tampil[alamat]</td>
				<td><a href='?hapus=$tampil[npm]'> Hapus</a></td>
				<td><a href='updateData.php?ubah=$tampil[npm]'> Ubah</a></td>
			</tr>";
			$a++;
		} ?>
	</table>
	<br>
	<br>
	<p><a href="formMhs.php">Tambah</a> data mahasiswa baru</p>
</center>

<?php 
if(isset($_GET['hapus'])){
	mysqli_query($koneksi,"delete from mahasiswa where npm='$_GET[hapus]'");

	echo "Data Berhasil dihapus";
	echo "<meta http-equiv=refresh content=3;URL='tabelmahasiswa.php'>";
} ?>