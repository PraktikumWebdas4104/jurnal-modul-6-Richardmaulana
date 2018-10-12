<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Max 35 Karakter"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" placeholder="Harus 10 Karakter"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI4101">MI4101 &nbsp;
				<input type="radio" name="kelas" value="MI4102">MI4102 &nbsp;
				<input type="radio" name="kelas" value="MI4103">MI4103 &nbsp;
				<input type="radio" name="kelas" value="MI4104">MI4104</td>
		</tr>
		<tr>
			<td>Jeni Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jekel" value="laki2">Laki-Laki &nbsp;
				<input type="radio" name="jekel" value="perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi" value="renang">Renang
				<input type="checkbox" name="hobi" value="basket">Basket
				<input type="checkbox" name="hobi" value="bacabuku">Baca Buku<br></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas" style="width: 160px">
				<option value="fak">Pilih Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FKB">Fakultas Komunikasi & Bisnis</option>
			</select></td>
		</tr>
	
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="pass"></td>
		</tr>

	</table><br>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		include"prosesregris.php";
	}
?>