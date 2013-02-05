<?php 
	require_once 'config.inc.php';

	session_start();
	
	if (!isset($_SESSION["usuario"])) {
?>
<div id="login">
	<div>
		<form name="login" action="<?php echo URLADDR; ?>/login.php" method="post">
			Usuario: 
			<input name="usuarioLogin" type="text" />
			Password:
			<input name="passwordLogin" type="password" />
			
			<input type="submit" value="Login" />
		</form>
	</div>
</div>
<?php 
	} else {
?>
<div id="login">
	<div>
		<form name="logout" action="<?php echo URLADDR; ?>/logout.php" method="get" >
			<span>Bienvenido <?php echo $_SESSION["usuario"]; ?></span>
			<input type="submit" value="Logout" />
		</form>
	</div>
</div>
<?php } ?>
<div id="logo">
	<div>
		<img alt="" src="<?php echo URLADDR; ?>/images/archlinuxlogo.png">
	</div>
</div>
	
<div id="menu">
	<div>
		<ul>
			<li>
				<a href="<?php echo URLADDR; ?>/index.php">HOME</a>
			</li>
			<li>
				<a href="#">TITULOS</a>
				<ul>
					<li><a href="<?php echo URLADDR; ?>/titulos/insertar.php">Insertar</a></li>
					<li><a href="<?php echo URLADDR; ?>/titulos/eliminar.php">Eliminar</a></li>
					<li><a href="<?php echo URLADDR; ?>/titulos/actualizar.php">Actualizar</a></li>
					<li><a href="<?php echo URLADDR; ?>/titulos/listar.php">Listar</a></li>
				</ul>
			</li>
			<li>
				<a href="#">GENEROS</a>
				<ul>
					<li><a href="<?php echo URLADDR; ?>/generos/insertar.php">Insertar</a></li>
					<li><a href="<?php echo URLADDR; ?>/generos/actualizar.php">Actualizar</a></li>
					<li><a href="<?php echo URLADDR; ?>/generos/listar.php">Listar</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>