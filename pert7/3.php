<?php 
function jumlahkan($x, $y){
	$hasil = $x + $y;
	return $hasil;
}
$bil = 0;
echo "Nilai bil awal adalah ".$bil."<br>";
$bil = jumlahkan(3, 4);
echo "Nilai bil setelah memanggil function adalah ".$bil."<br>";
 ?>