<!DOCTYPE html>
<html>
<head>
	<title>PRIVAT WEB</title>
</head>
<body>

	<?php 
		session_start();
		if (empty($_SESSION['admin'])) //belum login
		{
			include 'login.php';
		}
		else
		{
			include 'menu.php';
		}

	?>

</body>
</html>