<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php 
		$tugas = $_POST['tugas'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];

		function hitungAkhir($tugas, $uts, $uas){
			$nilaiAkhir = 0.2*$tugas + 0.3*$uts + 0.5*$uas;
			return $nilaiAkhir;
		}

		$nilaiAkhir = hitungAkhir($tugas, $uts, $uas);

		function grade($nilaiAkhir){
			if ($nilaiAkhir >= 90){
				return 'A';
			} else if ($nilaiAkhir >= 80){
				return 'B';
			} else if ($nilaiAkhir >= 60){
				return 'C';
			} else {
				return 'D';
			}
		}

		$grade = grade($nilaiAkhir);

		echo "Nilai Tugas : ".$tugas."<br>";
		echo "Nilai UTS : ".$uts."<br>";
		echo "Nilai UAS : ".$uas."<br>";
		echo "<br>Nilai Akhir : ".$nilaiAkhir."<br>";
		echo "Grade : ".$grade;
		?>
	</center>
</body>
</html>