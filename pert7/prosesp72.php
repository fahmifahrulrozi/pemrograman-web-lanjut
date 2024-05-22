<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php 
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		function hitungDeterminan($a, $b, $c){
			$determinan = ($b*$b) - (4*$a*$c);
			return $determinan;
		}

		function keterangan($determinan){
			if ($determinan > 0){
				return "Kurva diatas garis";
			} else if ($determinan < 0){
				return "Dibawah garis kurva";
			} else {
				return "Berada di garis kurva";
			}
		}

		$d = hitungDeterminan($a, $b, $c);
		$ket = keterangan($d);

		echo "A = ".$a."<br>";
		echo "B = ".$b."<br>";
		echo "C = ".$c."<br>";
		echo "<br>D = ".$d."<br>";
		echo "Keterangan : ".$ket;
		?>
	</center>
</body>
</html>