<?php 
	require_once '../config.inc.php';
	require_once ABSPATH.'/consultas.php';

	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para actualizar un titulo");
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["titulo"])){
		
		//POST para actualizar
		
		$id = $_POST["id"];
		$titulo = $_POST["titulo"];
		$idioma = $_POST["idioma"];
		$subtitulos = $_POST["subtitulos"];
		$genero = $_POST["genero"];
	
		$genero_id = obtenerIdGenero($genero);
		
		if (actualizarTitulo($id, $titulo, $idioma, $subtitulos, $genero_id)) {
			header("Location: ".URLADDR."/titulos/listar.php");
		} else {
			header("Location: ".URLADDR."/error.php");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET" ||
			$_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST["titulo"])) {
		
		//Si es GET muestro el formulario para que ingrese el id
		//Si es el primer POST deshabilito el id y dejo que modifique los otros campos
		
		$modificarTitulo = $_SERVER['REQUEST_METHOD'] == "POST";

		if ($modificarTitulo){
			$titulo = obtenerTitulo($_POST['id']);
			if (!$titulo){
				header("Location: ".URLADDR."/error.php?titulo=Titulo inexistente&mensaje=Debe ingresar un id de titulo valido");
			}
		}
?>
<!doctype>
<html>
	<head>
		<title>e.Disks</title>
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
				<form action="<?php echo URLADDR; ?>/titulos/actualizar.php" method="post">
					<div>
						<div>
							Id: 
							<?php 
							if (!$modificarTitulo) {
								echo '<input name="id" type="text" />';
							} else {
								echo '<input name="id" type="text" value="'.$titulo['id'].'" readonly="readonly" />';
							}
							?>	
						</div>
						<div>
							Titulo:
							<?php 
							if (!$modificarTitulo) {
								echo '<input name="titulo" type="text" value="Deshabilitado" disabled="disabled" />';
							} else {
								echo '<input name="titulo" type="text" value="'.$titulo['titulo'].'"/>';
							}
							?>
						</div>
						<div>
							Idioma:
							<?php 
							if (!$modificarTitulo) {
								echo '<input name="idioma" type="text" value="Deshabilitado" disabled="disabled" />';
							} else {
								echo '<input name="idioma" type="text" value="'.$titulo['idioma'].'"/>';
							}
							?>
						</div>
						<div>
							Subtitulos:
							<?php 
							if (!$modificarTitulo) {
								echo '<input name="subtitulos" type="text" value="Deshabilitado" disabled="disabled" />';
							} else {
								echo '<input name="subtitulos" type="text" value="'.$titulo['subtitulos'].'"/>';
							}
							?>
						</div>
						<div>
							Genero:
							<?php
							if (!$modificarTitulo) {
								echo '<select name="genero" disabled="disabled">';
								echo '<option>Deshabilitado</option>';
								echo '</select>';
								 
							} else {
								echo '<select name="genero">';
								$genero_id = $titulo['genero_id'];
								$generos = listarGeneros();
								while($genero = mysql_fetch_assoc($generos)){
									$selected = "";
									if ($genero_id == $genero['id']){
										$selected = "selected";
									}
									echo "<option $selected >".$genero['genero']."</option>";
								}
								echo '</select>';
							}
							?>
						</div>
						<div>
							<?php 
							if (!$modificarTitulo){
								$submit = "Seleccionar Titulo";
							} else {
								$submit = "Actualizar Titulo";
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
