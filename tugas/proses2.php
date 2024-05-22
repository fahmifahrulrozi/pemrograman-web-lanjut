<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$nama = $_POST['nama'];
	$tlp = $_POST['tlp'];
	$jenis = $_POST['jenis'];
	if ($jenis == "Standar") {
		$harga = 250000;
	} else if ($jenis == "VIP") {
		$harga = 500000;
	} else {
		$harga = 750000;
	}
	$jumlah = $_POST['jumlah'];
	$bayar = $harga*$jumlah;
	 

	echo "DATA PEMESANAN TIKET BOLA SEAGAMES 2018";
	echo "<br>INDONESIA VS MALAYSIA";
	echo "<br>PUKUL 15.00 WIB<br>";
	?>
	<strong>
		<?php 
		echo "<br>Nama &emsp; : ".$nama;
		echo "<br>Telp &emsp; : ".$tlp;
		echo "<br>Jenis Tiket : ".$jenis;
		echo "<br>Harga Tiket : ".$harga."<br>";
		echo "<br>Banyaknya Tiket : ".$jumlah; 
		echo "<br><hr>";
		echo "<br>Total Bayar : ".$bayar;
		?>
	</strong>
</body>
</html>