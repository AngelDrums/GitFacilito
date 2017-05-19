<?php 
	

	$respuesta = "";
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if ($user == "Eduard" && $pass == "grecocks") {
		$respuesta = "Bienvenido";
	}else{
		$respuesta = "Usuario o contraseña incorrecta";
	}

 ?>