<?php
	require_once 'consultas.php';

	session_start();
	
	$usuario = $_POST["usuarioLogin"];
	$password = $_POST["passwordLogin"];
	
	if (validarUsuario($usuario, $password)){
		$_SESSION["usuario"] = $usuario;
	}
	
	header("Location: index.php");
?>
