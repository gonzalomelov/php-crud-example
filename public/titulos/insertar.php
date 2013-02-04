<?php 
	require_once '../config.inc.php';

	session_start();	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once ABSPATH.'consultas.php';

		$titulo = $_POST["titulo"];
		$idioma = $_POST["idioma"];
		$subtitulos = $_POST["subtitulos"];
		$genero = $_POST["genero"];
	
		$genero_id = obtenerIdGenero($genero);
		
		if (insertarTitulo($titulo, $idioma, $subtitulos, $genero_id)) {
			header("Location: ".URLADDR."titulos/listar.php");
		} else {
			header("Location: ".URLADDR."titulos/insertar.php");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

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
					require_once ABSPATH.'header.php';
				?>
			</div>
			<div id="content">
				<form name="tituloInsertar" action="<?php echo URLADDR; ?>titulos/insertar.php" method="post">
					<div>
						<div>
							Titulo: 
							<input name="titulo" type="text" />
						</div>
						<div>
							Idioma:
							<input name="idioma" type="text" />
						</div>
						<div>
							Subtitulos:
							<input name="subtitulos" type="text" />
						</div>
						<div>
						Genero:
						<select name="genero">
						<?php
						require_once ABSPATH.'consultas.php';
						
						$generos = listarGeneros();
						while($genero = mysql_fetch_assoc($generos)){
							echo "<option>".$genero['genero']."</option>";
						}
						?>
						</select>
						</div>
						
						<input type="submit" value="Insertar Titulo" />
					</div>
				</form>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'footer.php';
				?>
			</div>
		</div>
	</body>
</html>
<?php
	}
?>
