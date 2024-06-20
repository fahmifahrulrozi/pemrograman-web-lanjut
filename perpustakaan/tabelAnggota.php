<p><a href="menu.php">kembali ke menu</a></p>
<center>
	<h3>DATA ANGGOTA PERPUSTAKAAN FAHMI</h3>
	<table border="1">
		<tr>
			<th bgcolor="pink">Kode Anggota</th>
			<th bgcolor="pink">Nama Anggota</th>
			<th bgcolor="pink">Nomor HP</th>
			<th bgcolor="pink">Alamat</th>
			<th bgcolor="pink" colspan="2">Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$a=1;
		$ambildata = mysqli_query ($koneksi,"select * from anggota");
		while ($tampil = mysqli_fetch_array($ambildata)){
			echo "
			<tr>
				<td>$tampil[kdanggota]</td>
				<td>$tampil[nmanggota]</td>
				<td>$tampil[nohp]</td>
				<td>$tampil[alamat]</td>
				<td><a href='?hapus=$tampil[kdanggota]' onCLick=\"return confirm ('Yakin akan menghapus data?');\">
				<input type='button' value='hapus'></a></td>
				<td><a href='updateAnggota.php?ubah=$tampil[kdanggota]'>
				<input type='button' value='Ubah'></a></td>
			</tr>";
			$a++;
		} ?>
	</table>
	<br>
	<br>
	<p><a href="formAnggota.php">Tambah</a> data anggota baru baru</p>
</center>

<?php 
if(isset($_GET['hapus'])){
	mysqli_query($koneksi,"delete from anggota where kdanggota='$_GET[hapus]'");

	echo "Data Anggota Berhasil Dihapus";
	echo "<meta http-equiv=refresh content=3;URL='tabelAnggota.php'>";
} ?>