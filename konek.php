<?php 
	$db = mysqli_connect("localhost", "root","", "d_modul6");
	if (!$db) {
	 	echo "tidak tersambung";
	 }else{
	 	echo "tersambung";
	 }
?>