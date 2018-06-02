<?php 

	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "privat_web";

	$sambungan= mysqli_connect($server, $username, $password, $database);

	if ($sambungan) 
	{
		//echo "Sambungan berhasil";
	}
	else
	{
		echo "Sambungan Gagal";
	}
?>