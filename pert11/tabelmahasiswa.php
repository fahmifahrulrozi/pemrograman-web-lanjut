<center>
	<h3>DATA MAHASISWA</h3>
	<table border="1">
		<tr>
			<th bgcolor="pink">NPM</th>
			<th bgcolor="pink">Nama Mahasiswa</th>
			<th bgcolor="pink">Nomor HP</th>
			<th bgcolor="pink">Alamat</th>
			<th bgcolor="pink">Jenis Kelamin</th>
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
				<td>$tampil[jenkel]</td>
			</tr>";
			$a++;
		} ?>
	</table>
</center>