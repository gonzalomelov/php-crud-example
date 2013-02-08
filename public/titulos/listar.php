<?php
	include '../config.inc.php';
	require_once ABSPATH.'/consultas.php';
	
	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para listar los titulos");
	}
?>

<!doctype>
<html>
	<head>
		<title>e.Disks - Listar Titulos</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URLADDR; ?>/style.css" />
		<script type="text/javascript" src="<?php echo URLADDR; ?>/validaciones.js"></script>
	</head>
	<body>
		<div id="wraper">
			<?php
				require_once ABSPATH.'/login.inc.php';
			?>
			<div id="page">
				<div id="header">
					<?php
						require_once ABSPATH.'/header.inc.php';
					?>
				</div>
				<div id="content">
					<div id="contenedor-tabla">
						<fieldset>
							<legend>Listar Titulos</legend>
							<div id="filtro">
								Filtrar por Género:
								<form action="<?php echo URLADDR; ?>/titulos/listar.php" method="get">
									<select id="genero" name="genero">
									<?php
									$generos = listarGeneros();
									while($genero = mysql_fetch_assoc($generos)){
										echo '<option>'.$genero['genero'].'</option>';
									}
									?>
									</select>
									<input type="submit" value="Filtrar"/>
								</form> 
							</div>
							<table id="tabla">
								<tr>
									<?php
									$generoUrl = "";
									if (isset($_GET['genero'])){
										$generoUrl = "&genero=".$_GET['genero'];
									}
									?>
								
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=id<?php echo $generoUrl; ?>">Id</a></th>
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=titulo<?php echo $generoUrl; ?>">Titulo</a></th>
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=idioma<?php echo $generoUrl; ?>">Idioma</a></th>
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=subtitulos<?php echo $generoUrl; ?>">Subtitulos</a></th>
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=zona<?php echo $generoUrl; ?>">Zona</a></th>
									<th><a href="<?php echo URLADDR; ?>/titulos/listar.php?orden=genero<?php echo $generoUrl; ?>">Genero</a></th>
								</tr>
							
								<?php 
									if (isset($_GET['orden']) && isset($_GET['genero'])){
										$titulos = listarTitulosOrdenadosPorGenero($_GET['orden'], $_GET['genero']);
									} else if (isset($_GET['orden']) && !isset($_GET['genero'])){
										$titulos = listarTitulosOrdenados($_GET['orden']);
									}  else if (!isset($_GET['orden']) && isset($_GET['genero'])){
										$titulos = listarTitulosPorGenero($_GET['genero']);
									}  else {
										$titulos = listarTitulos();
									}
									
									while ($titulo = mysql_fetch_assoc($titulos)) {
										echo "<tr>";
										echo "<td>".$titulo['id']."</td>";
										echo "<td>".$titulo['titulo']."</td>";
										echo "<td>".$titulo['idioma']."</td>";
										echo "<td>".$titulo['subtitulos']."</td>";
										echo "<td>".$titulo['zona']."</td>";
										echo "<td>".$titulo['genero']."</td>";
										echo "</tr>";
									}
									
								?>
							</table>
						</fieldset>
					</div>
				</div>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'/footer.inc.php';
				?>
			</div>
		</div>
	</body>
</html>

