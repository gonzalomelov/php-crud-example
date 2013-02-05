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
	</head>
	<body>
		<div id="page">
			<div id="header">
				<?php
					require_once ABSPATH.'/header.php';
				?>
			</div>
			<div id="content">
				<table>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Idioma</th>
						<th>Subtitulos</th>
						<th>Genero</th>
					</tr>
				
				<?php 
					$titulos = listarTitulos();
					while ($titulo = mysql_fetch_assoc($titulos)) {
						echo "<tr>";
						echo "<td>".$titulo['id']."</td>";
						echo "<td>".$titulo['titulo']."</td>";
						echo "<td>".$titulo['idioma']."</td>";
						echo "<td>".$titulo['subtitulos']."</td>";
						echo "<td>".$titulo['genero']."</td>";
						echo "</tr>";
					}
					
				?>
				</table>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'/footer.php';
				?>
			</div>
		</div>
	</body>
</html>

