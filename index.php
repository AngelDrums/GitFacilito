<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
</head>
<body>

	<form action="login.php" method="POST">
		<input type="text" name="user" placeholder="Usuario"></input>
		<input type="password" name="pass" placeholder="Contraseña"></input>
		<input type="submit"></input>
	</form>
	
	<?php 
		echo $respuesta;
	 ?>

</body>
</html>