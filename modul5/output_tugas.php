<?php
	$baris = $_GET['baris'];
	$kolom = $_GET['kolom'];
	print "Banyaknya baris : ".$baris;
	print "<br>Banyaknya Kolom : ".$kolom;
	print "<br>Hasil outputnya : ";
	if (isset($_GET['btnok'])){
		echo"<br><table border=1>";
		for ($i=0; $i < $baris; $i++) { 
			echo "<tr></tr>";
			for ($j=0; $j < $kolom; $j++) { 
				echo "<td>oke</td>";
			}
		}
	} ?>