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
	</head>
	<body>
		<div id="page">
			<div id="header">
				<?php
					require_once ABSPATH.'/header.php';
				?>
			</div>
			<div id="content">
				<form name="generoInsertar" action="<?php echo URLADDR; ?>/generos/insertar.php" method="post">
					<div>
						<div>
							Genero: 
							<input name="genero" type="text" />
						</div>
						<input type="submit" value="Insertar Genero" />
					</div>
				</form>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'/footer.php';
				?>
			</div>
		</div>
	</body>
</html>
<?php
	}
?>
