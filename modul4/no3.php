<?php 
echo "Fahmi Fahrulrozi<br>";
echo "202143500864<p>";

$nilai = 1;
do {
	if ($nilai%2==0) {
		echo "$nilai merupakan bilangan Genap";
	} else {
		echo "$nilai merupakan bilangan Ganjil";
	}
	$nilai++;
	echo "<br>";
} while ($nilai<=5);
?>