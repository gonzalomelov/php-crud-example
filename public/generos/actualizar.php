<?php 
	require_once '../config.inc.php';
	require_once ABSPATH.'/consultas.php';

	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para realizar actualizar un genero");
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["genero"])){
		
		//POST para actualizar
		
		$id = $_POST["id"];
		$genero = $_POST["genero"];
	
		if (actualizarGenero($id, $genero)) {
			header("Location: ".URLADDR."/generos/listar.php");
		} else {
			header("Location: ".URLADDR."/error.php");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET" ||
			$_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST["genero"])) {
		
		//Si es GET muestro el formulario para que ingrese el id
		//Si es el primer POST deshabilito el id y dejo que modifique los otros campos
		
		$modificarGenero = $_SERVER['REQUEST_METHOD'] == "POST";

		if ($modificarGenero){
			$genero = obtenerGenero($_POST['id']);
			if (!$genero){
				header("Location: ".URLADDR."/error.php");
				header("Location: ".URLADDR."/error.php?titulo=Genero inexistente&mensaje=Debe ingresar un id de genero valido");
			}
		}
?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Actualizar Genero</title>
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
				<form action="<?php echo URLADDR; ?>/generos/actualizar.php" method="post">
					<div>
						<div>
							Id: 
							<?php 
							if (!$modificarGenero) {
								echo '<input name="id" type="text" />';
							} else {
								echo '<input name="id" type="text" value="'.$genero['id'].'" readonly="readonly" />';
							}
							?>	
						</div>
						<div>
							Genero:
							<?php 
							if (!$modificarGenero) {
								echo '<input name="genero" type="text" value="Deshabilitado" disabled="disabled" />';
							} else {
								echo '<input name="genero" type="text" value="'.$genero['genero'].'"/>';
							}
							?>
						</div>
						<div>
							<?php 
							if (!$modificarGenero){
								$submit = "Seleccionar Genero";
							} else {
								$submit = "Actualizar Genero";
							}
							echo '<input type="submit" value="'.$submit.'" />'; 
							?>
						</div>
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
