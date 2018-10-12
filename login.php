<form method="POST">
	<table>
		<tr>
			<td>Username (NIM)</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
	</table><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" value="LOGIN"> &nbsp;
			<button><a href="regris.php">REGISTRASI</a></button>
	
</form>

<?php

	if (isset($_POST['submit'])) {
		session_start();

		include"koneksi.php";

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, password FROM kelolauser WHERE nim='$nim'";

		$qry = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["username"]=$row[0];
        		$_SESSION["password"]=$row[1];

        		echo "SELAMAT LOGIN SUKSES";
        		echo "<table>
        				<tr>
        					<td>NIM</td>
        					<td>:</td>
        					<td>$nim</td>
        				</tr>
        				<tr>
        					<td>Nama</td>
        					<td>:</td>
        					<td>$nama</td>
        				</tr>
        				<tr>
        					<td>Kelas</td>
        					<td>:</td>
        					<td>$kelas</td>
        				</tr>
        			  </table>";
        		
			}
			else{
				echo "MAAF PASSWORD YANG ANDA MASUKKAN SALAH";
			}
		}
		else{
			echo "MAAF NIM YANG ANDA MASUKKAN SALAH";
		}
	}
?>