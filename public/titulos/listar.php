<?php
	include '../config.inc.php';
?>

<!doctype>
<html>
	<head>
		<title>e.Disks</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
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
						<th>Titulo</th>
						<th>Idioma</th>
						<th>Subtitulos</th>
					</tr>
				
				<?php 
					require_once ABSPATH.'/consultas.php';
					
					$titulos = obtenerTitulos();
					while ($titulo = mysql_fetch_assoc($titulos)) {
						echo "<tr>";
						echo "<td>".$titulo['titulo']."</td>";
						echo "<td>".$titulo['idioma']."</td>";
						echo "<td>".$titulo['subtitulos']."</td>";
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

