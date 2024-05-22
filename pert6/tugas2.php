<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 2</title>
</head>
<body>
	<form action="outputtugas2.php" method="POST">
		<center>
		Created by @Fahmi Fahrulrozi 202143500864 <br><br><br>
		FORM TIKET BOLA SEAGAMES 2018 <br><br>
		INDONESIA VS MALAYSIA <br>
		PUKUL 15.00 WIB <br><br><br>
		<table>
			<tr>
				<td>Nama Pemesan</td>
				<td> = <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td> = <input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Jenis Tiket</td>
				<td> = <select name="jenis">
					<option value="Ekonomi">Ekonomi</option>
					<option value="VIP">VIP</option>
					<option value="VVIP">VVIP</option>
				</select></td>
			</tr>
			<tr>
				<td>Jumlah Tiket</td>
				<td> = <input type="text" name="jumlah"> Lembar</td>
			</tr>
		</table>
		<input type="submit" value="Proses">
		</center>
	</form>
</body>
</html>