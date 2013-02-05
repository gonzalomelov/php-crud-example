<?php

require_once 'config.inc.php';

//Configuracion DB
function definirDB(){
	global $mysql_host, $mysql_database, $mysql_user, $mysql_password;
	mysql_connect($mysql_host, $mysql_user, $mysql_password);
	mysql_select_db($mysql_database);
}

//Usuarios
function validarUsuario($usuario, $password){
	definirDB();
	
	$query = "select * from usuarios u where u.usuario='$usuario' and u.password='$password';";
	$result = mysql_query($query);
	
	if (!$result){
		return false;
	}
	
	$numResults = mysql_num_rows($result);
	
	return $numResults == 1; 	
}

//Titulos
function insertarTitulo($titulo, $idioma, $subtitulos, $genero_id){
	definirDB();
	
	$query = "insert into titulos (titulo, idioma, subtitulos, genero_id)".
			" values ('$titulo', '$idioma', '$subtitulos', $genero_id)";
	$result = mysql_query($query);

	return $result;
}

function obtenerTitulo($idTitulo){
	definirDB();
	
	$query = "select * from titulos where id=$idTitulo;";
	$result = mysql_query($query);

	if (!$result){
		return false;
	}

	return mysql_fetch_assoc($result);
}

function listarTitulos(){
	definirDB();
	
	$query = "select t.id, titulo, idioma, subtitulos, genero_id, genero ".
		"from titulos t join generos g on t.genero_id = g.id;";
	$result = mysql_query($query);
	
	if (!$result){
		return false;
	}
	
	return $result;
}

function eliminarTitulo($id){
	definirDB();
	
	$query = "delete from titulos where id = $id;";
	$result = mysql_query($query);

	return $result;
}

function actualizarTitulo($id, $titulo, $idioma, $subtitulos, $genero_id){
	definirDB();
	
	$query = "update titulos set titulo='$titulo', idioma='$idioma', subtitulos='$subtitulos', genero_id=$genero_id where id=$id;";
	$result = mysql_query($query);

	return $result;
}

//Generos
function insertarGenero($genero){
	definirDB();
	
	$query = "insert into generos (genero) values ('$genero')";
	$result = mysql_query($query);

	return $result;
}

function obtenerIdGenero($genero){
	definirDB();
	
	$query = "select * from generos where genero='$genero';";
	$result = mysql_query($query);

	if (!$result){
		return false;
	}

	$fila = mysql_fetch_assoc($result);

	return $fila['id'];
}

function obtenerGenero($id){
	definirDB();

	$query = "select * from generos where id='$id';";
	$result = mysql_query($query);

	if (!$result){
		return false;
	}

	return mysql_fetch_assoc($result);
}

function listarGeneros(){
	definirDB();
	
	$query = "select * from generos;";
	$result = mysql_query($query);
	
	if (!$result){
		return false;
	}
	
	return $result;
}

function actualizarGenero($id, $genero){
	definirDB();
	
	$query = "update generos set genero='$genero' where id=$id;";
	$result = mysql_query($query);

	return $result;
}

?>
