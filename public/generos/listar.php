<?php
	include '../config.inc.php';
	require_once ABSPATH.'/consultas.php';
	
	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para listar los generos");
	}
?>

<!doctype>
<html>
	<head>
		<title>e.Disks - Listar Generos</title>
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
							<legend>Listar Generos</legend>
							<table id="tabla">
								<tr>
									<th>Id</th>
									<th>Genero</th>
								</tr>
							
								<?php 
									$generos = listarGeneros();
									while ($genero = mysql_fetch_assoc($generos)) {
										echo "<tr>";
										echo "<td>".$genero['id']."</td>";
										echo "<td>".$genero['genero']."</td>";
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

