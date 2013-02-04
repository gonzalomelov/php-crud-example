<?php
	include '../config.inc.php';
?>

<!doctype>
<html>
	<head>
		<title>e.Disks</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URLADDR; ?>style.css" />
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
						<th>Genero</th>
					</tr>
				
				<?php 
					require_once ABSPATH.'/consultas.php';
					
					$generos = listarGeneros();
					while ($genero = mysql_fetch_assoc($generos)) {
						echo "<tr>";
						echo "<td>".$genero['genero']."</td>";
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

