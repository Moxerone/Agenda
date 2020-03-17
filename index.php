<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Agenda</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,500|Oswald|Poppins|Roboto+Mono:300,400|Roboto:300,400&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/agenda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/decorado.css">
</head>
<body>
	<form action="" method="post" name="miformulario">
		<div id="icon_user">
			<img src="img/user.png" alt="user.png">
		</div>
		<div id="principal">
			<p id="titulo">Iniciar Sesión</p>
			<div id="elementos">
					<label for="usuario">Usuario:</label><br>
					<input type="text" name="usuario" id="usuario" placeholder="Nombre Usuario"><br><br>
					<label for="password">Contraseña:</label><br>
					<input type="password" name="password" id="password" placeholder="Contraseña"><br><br>
					<input type="submit" name="submit" id="boton" value="ingresar" onclick="validar()"><br>
					<hr>
					<p id="comentario">¡Bienvenido ingresa tus datos!</p>

			</div>
		</div>
	</form>
	<?php 
		if (isset($_POST['submit'])) {
			require("ingreso.php");
		}
	 ?>
<script type="text/javascript" src="js/validacion.js"></script>
</body>
</html>