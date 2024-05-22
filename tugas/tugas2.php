<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<p>FORM TIKET BOLA SEAGAMES 2018</p>
		<p>INDONESIA VS MALAYSIA</p>
		<p>PUKUL 15.00 WIB</p><br>
	</center>
	<form action="proses2.php" method="POST">
		<center>
		<table>
			<tr>
				<td>NAMA PEMESAN &emsp; &emsp;</td>
				<td>= &emsp;</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>TELP</td>
				<td>=</td>
				<td><input type="text" name="tlp"></td>
			</tr>
			<tr>
				<td>JENIS TIKET</td>
				<td>=</td>
				<td><select name="jenis">
					<option value="Standar">Standar</option>
					<option value="VIP">VIP</option>
					<option value="VVIP">VVIP</option>
				</select></td>
			</tr>
			<tr>
				<td>JUMLAH TIKET</td>
				<td>=</td>
				<td><input type="text" name="jumlah"><br>Lembar</td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Simpan">
		</center>
	</form>
</body>
</html>