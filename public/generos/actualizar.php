<?php 
	require_once '../config.inc.php';

	session_start();	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require_once ABSPATH.'consultas.php';

		$genero = $_POST["genero"];
		
		if (insertarGenero($genero)) {
			header("Location: ".URLADDR."generos/listar.php");
		} else {
			header("Location: ".URLADDR."generos/insertar.php");
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
				<form name="generoInsertar" action="<?php echo URLADDR; ?>generos/insertar.php" method="post">
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
					require_once ABSPATH.'footer.php';
				?>
			</div>
		</div>
	</body>
</html>
<?php
	}
?>
