<?php

require_once 'dbconnection.inc.php';

function validarUsuario($usuario, $password){
	
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;
	
	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "select * from usuarios u where u.usuario='$usuario' and u.password='$password';";
	$result = mysql_query($query);
	
	if (!$result){
		error_log("error");
		return false;
	}
	
	$numResults = mysql_num_rows($result);
	
	return $numResults == 1; 	
}

function insertarTitulo($titulo, $idioma, $subtitulos, $genero_id){
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;

	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "insert into titulos (titulo, idioma, subtitulos, genero_id)".
			" values ('$titulo', '$idioma', '$subtitulos', $genero_id)";
	
	error_log("query: ".$query);
	
	$result = mysql_query($query);

	return $result;
}

function listarTitulos(){
	
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;
	
	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "select * from titulos t join generos g on t.genero_id = g.id;";
	$result = mysql_query($query);
	
	if (!$result){
		error_log("error");
		return false;
	}
	
	return $result;
}

function eliminarTitulo($id){
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;

	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "delete from titulos where id = $id;";
	$result = mysql_query($query);

	return $result;
}

function insertarGenero($genero){
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;

	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "insert into generos (genero) values ('$genero')";
	$result = mysql_query($query);

	return $result;
}

function listarGeneros(){
	
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;
	
	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "select * from generos;";
	$result = mysql_query($query);
	
	if (!$result){
		error_log("error");
		return false;
	}
	
	return $result;
}

function obtenerIdGenero($genero){
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;
	
	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
	$query = "select * from generos where genero='$genero';";
	$result = mysql_query($query);
	
	if (!$result){
		error_log("error");
		return false;
	}
	
	$fila = mysql_fetch_assoc($result);
	
	return $fila['id'];
}

?>
