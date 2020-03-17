<?php 
	require("conection_db.php");
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	
	$query = "SELECT * FROM registro WHERE nombre = '$usuario' and pass = '$password'";
	$resultado = mysqli_query($conexion, $query);
	$row = mysqli_num_rows($resultado);
	if ($row > 0){
		header("Location:pagina_uno.php");	
	}else{
		echo "error....";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?>

