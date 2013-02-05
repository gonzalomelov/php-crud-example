<?php
	require_once 'config.inc.php';
	require_once ABSPATH.'/consultas.php';

	session_start();
	
	$usuario = $_POST["usuarioLogin"];
	$password = $_POST["passwordLogin"];
	
	if (validarUsuario($usuario, $password)){
		$_SESSION["usuario"] = $usuario;
		header("Location: ".URLADDR."/index.php");
	} else {
		header("Location: ".URLADDR."/error.php?titulo=Datos incorrectos&mensaje=Ingrese usuario y password correctos");
	}
?>
