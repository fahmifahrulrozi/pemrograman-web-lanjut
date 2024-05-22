<?php 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$lama = $_POST['lama'];
	$jumlah = $_POST['jumlah'];
	echo "Nama : ".$nama;
	echo "<br>Alamat : ".$alamat;
	for ($i=1; $i <= $lama ; $i++) { 
		echo "<br>Angsuran ".$i." ".$jumlah." kali";
	}
 ?>