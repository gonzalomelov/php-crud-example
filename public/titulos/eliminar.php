
<?php 
	require_once '../config.inc.php';
?>
<!doctype>
<html>
	<head>
		<title>e.Disks</title>
		<link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT; ?>/style.css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<?php
					require_once APP_ROOT.'header.php';
				?>
			</div>
			<div id="content">
				<form name="tituloInsertar" action="insertar.php" method="post">
					Titulo: 
					<input name="titulo" type="text" />
					Idioma:
					<input name="idioma" type="text" />
					Subtitulos:
					<input name="subtitulos" type="text" />
					<select name="genero">
					<?php
						require_once APP_ROOT.'consultas.php';
						
						$generos = listarGeneros();
						while($genero = mysql_fetch_assoc($generos)){
							echo "<option>$genero</option>";
						}
					?>
					</select>
					
					<input type="submit" value="Insertar Titulo" />
				</form>
				<?php 
					require_once APP_ROOT.'consultas.php';
					
					$titulos = obtenerTitulos();
					while ($titulo = mysql_fetch_assoc($titulos)) {
						echo "<tr>";
						echo "<td>".$titulo['titulo']."</td>";
						echo "<td>".$titulo['idioma']."</td>";
						echo "<td>".$titulo['subtitulos']."</td>";
						echo "</tr>";
					}
					
				?>
			</div>
			<div id="footer">
				<?php
					require_once APP_ROOT.'footer.php';
				?>
			</div>
		</div>
	</body>
</html>

