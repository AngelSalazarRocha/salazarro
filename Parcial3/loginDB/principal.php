<?php
	session_start();
	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Minisuper - La5ta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="ctn-welcome">
		
		<h1 class="title-welcome">
			<img src="imglogo/Logo.ico" alt="" class="logo-welcome">
			Bienvenido
			<div id="usuario"><?php echo $_SESSION["usuario"]; ?></div>
		</h1>

		<a href="cerrarSesion.php" class="close-session">Cerrar sesión</a>

	</div>
	
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#">Rol</a>
		</li>
	</ul>

</body>
</html>