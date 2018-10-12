<?php

	include"koneksi.php";

  	if (isset($_POST['submit'])) {
		include"koneksi.php";
		if ($koneksi) {

			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$kelas = $_POST['kelas'];
			$jekel = $_POST['jekel'];
			$hobi = $_POST['hobi'];
			$fakultas = $_POST['fakultas'];	
			$alamat = $_POST['alamat'];
			$password = $_POST['pass'];
	
			$query = mysqli_query($koneksi,"SELECT*FROM kelolauser WHERE nim ='$nim'");
			$row = mysqli_fetch_array($query);
			$cari = strpos($nama, is_numeric($nama));

			if (strlen($nama)<=35) {
				if (strlen($nim)==10 && is_numeric($nim)==TRUE) {


					$sql = $koneksi->query("
					INSERT INTO `kelolauser` (`nim`, `nama`, `kelas`,`jeniskelamin`,`hobi`,`fakultas`,`alamat`,`password`)
					VALUES ('$nim', '$nama', '$kelas','$jekel','$hobi','$fakultas','$alamat','$password')");

					echo "<h1>Selamat Registrasi Berhasil</h1><br>";
					echo "Silahkan Melakukan Login <a href='login.php'><input type='submit' value='Halaman LogIn'></a>";				
				}
				else{
					echo "Nim Harus 10 karakter Dan Harus Berupa angka";
				}
			}
			else{
				echo "Nama Maksimal 35 karakter";
			}			
		}
		else{
			echo "REGISTRASI GAGAL";
		}
	}  		
 ?>