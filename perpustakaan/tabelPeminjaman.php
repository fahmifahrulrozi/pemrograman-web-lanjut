<p><a href="menu.php">kembali ke menu</a></p>
<center>
	<h3>DATA PEMINJAMAN BUKU PERPUSTAKAAN FAHMI</h3>
	<table border="1">
		<tr>
			<th bgcolor="pink">Kode Peminjaman</th>
			<th bgcolor="pink">Judul Buku</th>
			<th bgcolor="pink">Nama Peminjam</th>
			<th bgcolor="pink">Tanggal Pinjam</th>
			<th bgcolor="pink">Tanggal Pengembalian</th>
			<th bgcolor="pink">Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$a=1;
		$ambildata = mysqli_query ($koneksi,"select * from peminjaman, buku, anggota where peminjaman.kdbuku = buku.kdbuku and peminjaman.kdanggota = anggota.kdanggota");
		while ($tampil = mysqli_fetch_array($ambildata)){
			echo "
			<tr>
				<td>$tampil[kdpinjam]</td>
				<td>$tampil[jdlbuku]</td>
				<td>$tampil[nmanggota]</td>
				<td>$tampil[tglpinjam]</td>
				<td>$tampil[tglkembali]</td>
				<td><a href='?hapus=$tampil[kdpinjam]' onCLick=\"return confirm ('Yakin akan menghapus data?');\">
				<input type='button' value='hapus'></a></td>
			</tr>";
			$a++;
		} ?>
	</table>
	<br>
	<br>
	<p><a href="formPeminjaman.php">Tambah</a> data peminjaman baru</p>
</center>

<?php 
if(isset($_GET['hapus'])){
	mysqli_query($koneksi,"delete from peminjaman where kdpinjam='$_GET[hapus]'");

	echo "Data Peminjaman Berhasil Dihapus";
	echo "<meta http-equiv=refresh content=2;URL='tabelPeminjaman.php'>";
} ?>