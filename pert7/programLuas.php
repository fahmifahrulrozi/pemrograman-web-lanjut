<?php 
function hitungLuas($p, $l, $nama){
	$luas = $p*$l;
	echo "Nama = ".$nama."<br>";
	echo "Panjang = ".$p."<br>";
	echo "Lebar = ".$l."<br>";
	echo "Luas = ".$luas."<br><br>";
	return $luas;
}

$p = 2;
$l = 3;
$nama = "Anjay";
hitungLuas($p, $l, $nama); 

$p = 4;
$l = 5;
$nama = "Anjir";
hitungLuas($p, $l, $nama); 
hitungLuas(8, 5, "Fahmi"); 
?>