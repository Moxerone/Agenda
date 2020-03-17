<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "usuarios";

	$conexion = mysqli_connect($server, $user, $password, $db);

	if ($conexion->connect_errno){
		echo "Nuestro sitio ha sufrido un error....";
	}

 ?>