<?php
	include("konek.php");
	session_start();

	if (isset($_POST['submit2'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
		$row = mysqli_fetch_array($query);

		if($username == $row['username'] && $password == $row['password']){
			$_SESSION['login_user'] = $username;
			echo '<script language="javascript">
			alert("login berhasil");
			</script>';
			header("location:regist.html");
		}else{
			echo '<script language="javascript">
			alert("login fail");
			document.location = "login.html"; 
			</script>';
			session_destroy();
		}
	}
?>