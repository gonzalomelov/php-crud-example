<?php 
	require_once '../config.inc.php';
	require_once ABSPATH.'/consultas.php';

	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para insertar un titulo");
	}	

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$titulo = $_POST["titulo"];
		$idioma = $_POST["idioma"];
		$subtitulos = $_POST["subtitulos"];
		$zona = $_POST["zona"];
		$genero = $_POST["genero"];
	
		$genero_id = obtenerIdGenero($genero);
		
		if (insertarTitulo($titulo, $idioma, $subtitulos, $zona, $genero_id)) {
			header("Location: ".URLADDR."/titulos/listar.php");
		} else {
			header("Location: ".URLADDR."/error.php");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Insertar Titulo</title>
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
					<div id="form">
						<fieldset>
							<legend>Insertar Titulo</legend>
							<form id="tituloInsertar" action="<?php echo URLADDR; ?>/titulos/insertar.php" method="post">
								<table>
									<tr>
										<td>Titulo:</td>
										<td></td>
										<td><input id="titulo" name="titulo" type="text" /></td>
									</tr>
									<tr>
										<td>Idioma:</td>
										<td></td>
										<td><input id="idioma" name="idioma" type="text" /></td>
									</tr>
									<tr>
										<td>Subtitulos:</td>
										<td></td>
										<td><input id="subtitulos" name="subtitulos" type="text" /></td>
									</tr>
									<tr>
										<td>Zona:</td>
										<td></td>
										<td><input id="zona" name="zona" type="text" /></td>
									</tr>
									<tr>
										<td>Genero:</td>
										<td></td>
										<td>
											<select id="genero" name="genero">
											<?php
											$generos = listarGeneros();
											while($genero = mysql_fetch_assoc($generos)){
												echo "<option>".$genero['genero']."</option>";
											}
											?>
											</select>
										</td>
									</tr>
									<tr>
										<td></td>
										<td><input type="button" value="Insertar Titulo" onclick="validarFormTituloInsertar()" /></td>
										<td></td>
									</tr>
								</table>
							</form>
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
<?php
	}
?>
