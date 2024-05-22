<!DOCTYPE html>
<html>
<body>
	<h2>Pemesanan Tiket Bioskop</h2>
	<form action="proses.php" method="POST">
		Nama: <br>
		<input type="text" name="nama"> <br>
		Film: <br>
		<select name="jenis">
			<option value="Film A">Film A</option>
			<option value="Film B">Film B</option>
			<option value="Film C">Film C</option>
		</select><br>
		Jumlah Tiket: <br>
		<input type="number" name="jumlah"><br>
		<br><input type="submit" value="Pesan Tiket">
	</form>
</body>
</html>