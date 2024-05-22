<?php
echo "<h2>Info Pemesanan Tiket</h2>";
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
if ($jenis == "Film A") {
	$harga =  150000;
} else if ($jenis == "Film B") {
	$harga =  120000;
} else {
	$harga =  100000;
}
$bayar = $harga*$jumlah;	 
echo "Nama : ".$nama;
echo "<br><br>Film : ".$jenis;
echo "<br><br>Jumlah Tiket : ".$jumlah;
echo "<br><br>Total Harga : Rp ".$bayar;
?>