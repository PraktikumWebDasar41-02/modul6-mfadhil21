<?php
	include("konek.php");

	if (isset($_POST['subregister'])) {
		$username = $_POST['username'];
		$password = ($_POST['password']);
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kls'];
		$jekel = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['ps'];
		$alamat = $_POST['alamat'];


		$input = mysqli_query($db, "INSERT INTO user(username, password, nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat) VALUES ('$username', '$password', '$nama', $nim', '$kelas', '$jekel', $hobi', '$fakultas', '$alamat')");
		
		if (!$input) {
		    echo "Error: " . $input . "<br>" . mysqli_error($db);
		} else {
		    echo 
		    	"<script language='javascript'>
					alert('register berhasil');
					document.location = 'login.html'; 
				</script>";
		}

		mysqli_close($db);

	}