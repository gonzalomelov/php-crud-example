<?php
	require_once 'config.inc.php';

	session_start();
	
	unset($_SESSION["usuario"]);
	
	header("Location: ".URLADDR."/index.php");
?>
