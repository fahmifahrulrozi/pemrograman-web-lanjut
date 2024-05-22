<?php 
echo "Fahmi Fahrulrozi<br>";
echo "202143500864<p>";

$nilai = 0;
while ($nilai <=4) {
	switch($nilai) {
		case 0:
			echo "$nilai merupakan Angka Nol";
			break;
		case 1:
			echo "$nilai merupakan Angka Satu";
			break;
		case 2:
			echo "$nilai merupakan Angka Dua";
			break;
		case 3:
			echo "$nilai merupakan Angka Tiga";
			break;
		default:
			echo "$nilai diluar jangkauan";
	}
	echo "<br>";
	$nilai++;
} ?>