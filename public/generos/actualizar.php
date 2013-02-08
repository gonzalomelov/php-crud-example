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
							<legend>Actualizar Genero</legend>
							<form id="generoActualizar" action="<?php echo URLADDR; ?>/generos/actualizar.php" method="post">
								<table>
									<tr>
										<td>Id:</td>
										<td></td>
										<td>
										<?php 
										if (!$modificarGenero) {
											echo '<input id="id" name="id" type="text" />';
										} else {
											echo '<input id="id" name="id" type="text" value="'.$genero['id'].'" readonly="readonly" />';
										}
										?>
										</td>
									</tr>
									<tr>
										<td>Genero:</td>
										<td></td>
										<td>
										<?php 
										if (!$modificarGenero) {
											echo '<input id="genero" name="genero" type="text" value="Deshabilitado" disabled="disabled" />';
										} else {
											echo '<input id="genero" name="genero" type="text" value="'.$genero['genero'].'"/>';
										}
										?>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
										<?php 
										if (!$modificarGenero){
											$submit = "Seleccionar Genero";
											echo '<input type="button" value="'.$submit.'" onclick="validarFormGeneroActualizarSeleccionar()" />';
										} else {
											$submit = "Actualizar Genero";
											echo '<input type="button" value="'.$submit.'" onclick="validarFormGeneroActualizarSubmit()" />';
										}
										 
										?>
										</td>
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
