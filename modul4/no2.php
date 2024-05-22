<?php 
echo "Fahmi Fahrulrozi<br>";
echo "202143500864<p>";

for($nilai=-2; $nilai<=2; $nilai++) {
	if ($nilai > 0) {
		echo "$nilai merupakan bilangan Positif";
	} else if ($nilai < 0) {
		echo "$nilai merupakan bilangan Negatif";
	} else {
		echo "$nilai merupakan bilangan Nol";
	}
	echo "<br>";
} ?>