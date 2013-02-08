<?php 
	require_once '../config.inc.php';
	require_once ABSPATH.'/consultas.php';

	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para insertar un genero");
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$genero = $_POST["genero"];
		
		if (insertarGenero($genero)) {
			header("Location: ".URLADDR."/generos/listar.php");
		} else {
			header("Location: ".URLADDR."/error.php");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Insertar Genero</title>
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
							<legend>Insertar Genero</legend>
							<form id="generoInsertar" name="generoInsertar" action="<?php echo URLADDR; ?>/generos/insertar.php" method="post">
								<table>
									<tr>
										<td>Genero:</td>
										<td></td>
										<td><input id="genero" name="genero" type="text" /></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="button" value="Insertar Genero" onclick="validarFormGeneroInsertar()" /></td>
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
