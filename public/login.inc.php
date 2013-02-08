<?php
	require_once 'config.inc.php';
	require_once ABSPATH.'/consultas.php';
	
	session_start();
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_SESSION["usuario"])){
		$usuario = $_POST["usuarioLogin"];
		$password = $_POST["passwordLogin"];
		
		if (validarUsuario($usuario, $password)){
			$_SESSION["usuario"] = $usuario;
			header("Location: ".URLADDR."/index.php");
		} else {
			header("Location: ".URLADDR."/error.php?titulo=Datos incorrectos&mensaje=Ingrese usuario y password correctos");
		}
	}
	
	if (!isset($_SESSION["usuario"])) {
?>
<div id="login">
	<div>
		<form id="loginForm" action="<?php echo URLADDR; ?>/login.inc.php" method="post">
			Usuario: 
			<input id="usuarioLogin" name="usuarioLogin" type="text" />
			Password:
			<input id="passwordLogin" name="passwordLogin" type="password" />
			
			<input type="button" value="Login" onclick="validarFormLogin()"/>
		</form>
	</div>
</div>
<?php 
	} else {
?>
<div id="login">
	<div>
		<form name="logout" action="<?php echo URLADDR; ?>/logout.inc.php" method="get" >
			<span>Bienvenido <?php echo $_SESSION["usuario"]; ?></span>
			<input type="submit" value="Logout" />
		</form>
	</div>
</div>
<?php } ?>
