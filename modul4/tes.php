<?php 
$nilai = 1;
do {
	if ($nilai%2==1) {
		echo "$nilai merupakan bilangan Ganjil";
	} else {
		echo "$nilai merupakan bilangan Genap";
	}
	$nilai++;
	echo "<br>";
} while ($nilai <= 10);
 ?>