<?php
	include("konek.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>REGISTER</h1>
	<form action="check.php" method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas : </td>
					<td><input type="radio" name="kls" value="01">01</td>
					<td><input type="radio" name="kls" value="02">02</td>
					<td><input type="radio" name="kls" value="03">03</td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
					<td><input type="radio" name="jk" value="laki-laki">laki-laki</td>
					<td><input type="radio" name="jk" value="perempuan">perempuan</td>
			</tr>
			<tr>
				<td>Hobi : </td>
				<td><input type="checkbox" name="hobi" value="sepakbola">sepakbola</td>
				<td><input type="checkbox" name="hobi" value="basket">basket</td>
				<td><input type="checkbox" name="hobi" value="dota">dota</td>
			</tr>
			<tr>
				<td>fakultas : </td>
				<td><select name="ps">
							<option value="manajemen informatika">Manajemen Informatika</option>
							<option value="teknik komputer">teknik komputer</option>
							<option value="teknik telekomunikasi">teknik komunikasi</option>
							<option value="perhotelan">perhotelan</option>
						</select>
					</td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
		<tr>
			<td colspan="3"><button type="submit" name="subregister">REGISTER</button>
		</tr>
	</table>
	</form>
	
</body>
</html>