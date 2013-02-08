<?php 
	require_once 'config.inc.php';

	session_start();	
?>
<div id="titulo">
	<h1>e.Disks</h1>
</div>
<div id="menu">
	<ul id="navbar">
		<li>
			<a href="<?php echo URLADDR; ?>/index.php">HOME</a>
		</li>
		<li>
			<a href="#" class="dropdown">TITULOS</a>
			<ul>
				<li><a href="<?php echo URLADDR; ?>/titulos/insertar.php">Insertar</a></li>
				<li><a href="<?php echo URLADDR; ?>/titulos/eliminar.php">Eliminar</a></li>
				<li><a href="<?php echo URLADDR; ?>/titulos/actualizar.php">Actualizar</a></li>
				<li><a href="<?php echo URLADDR; ?>/titulos/listar.php">Listar</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="dropdown">GENEROS</a>
			<ul>
				<li><a href="<?php echo URLADDR; ?>/generos/insertar.php">Insertar</a></li>
				<li><a href="<?php echo URLADDR; ?>/generos/actualizar.php">Actualizar</a></li>
				<li><a href="<?php echo URLADDR; ?>/generos/listar.php">Listar</a></li>
			</ul>
		</li>
	</ul>
</div>