<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 2</title>
</head>
<body>
	<p>Created by @Fahmi Fahrulrozi 202143500864 <br><br></p>
	<?php 
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$jenis = $_POST['jenis'];
	if ($jenis == "Ekonomi") {
		$harga = 100000;
	} else if ($jenis == "VIP") {
		$harga = 300000;
	} else {
		$harga = 500000;
	}
	$jumlah = $_POST['jumlah'];
	$bayar = $harga*$jumlah;
	 

	print "DATA PEMESANAN TIKET BOLA SEAGAMES 2018";
	print "<br>INDONESIA VS MALAYSIA";
	print "<br>PUKUL 15.00 WIB<br>";
	?>
	<strong>
		<?php 
		print "<br>Nama Pemesan : ".$nama;
		print "<br>No. Telepon : ".$telp;
		print "<br>Jenis Tiket : ".$jenis;
		print "<br>Harga Tiket : Rp. ".$harga;
		print "<br>Banyaknya Tiket : ".$jumlah." Lembar"; 
		print "<br>-------------------------------------------------------------------------";
		print "<br>Total Bayar : Rp. ".$bayar;
		?>
	</strong>
</body>
</html>