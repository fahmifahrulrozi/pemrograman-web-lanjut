<?php 
function cetakNilai($nama, $uts, $uas, $tugas){
	$nilai = 0.2*$tugas+0.3*$uts+0.5*$uas;
	if($nilai >= 85){
		$grade = "A";
	}else if($nilai >=75) {
		$grade = "B";
	}else if($nilai >=65) {
		$grade = "C";
	}else{
		$grade = "D";
	}
	echo "Rincian Nilai yang diperoleh <b>".$nama."</b> : <br>";
	echo "Tugas : ".$tugas;
	echo "<br> UTS : ".$uts;
	echo "<br> UAS : ".$uas;
	echo "<br>Perolehan Nilai : <b>".$nilai."</b>";
	echo "<br>Perolehan Grade : <b>".$grade."</b><br>";
}
cetakNilai("Dimas Kanjeng", 90, 70, 80);
 ?>