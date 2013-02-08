<?php 
	require_once '../config.inc.php';
	require_once ABSPATH.'/consultas.php';

	//Si no esta logueado retorno pagina de error
	session_start();
	
	if (!isset($_SESSION["usuario"])){
		header("Location: ".URLADDR."/error.php?titulo=No se encuentra logueado&mensaje=Ingrese al sitio para eliminar un titulo");
	}	
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["titulo"])){
		
		//POST para eliminar
		
		$id = $_POST["id"];
		$titulo = $_POST["titulo"];
		$idioma = $_POST["idioma"];
		$subtitulos = $_POST["subtitulos"];
		$zona = $_POST["zona"];
		$genero = $_POST["genero"];
		
		if (eliminarTitulo($id)) {
			header("Location: ".URLADDR."/titulos/listar.php");
		} else {
			header("Location: ".URLADDR."/error.php?titulo=Error Actualizando Titulo&mensaje=Intentelo de nuevo");
		}

	} else if ($_SERVER['REQUEST_METHOD'] == "GET" ||
			$_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST["titulo"])) {
		
		//Si es GET muestro el formulario para que ingrese el id
		//Si es el primer POST deshabilito el id y dejo que vea los otros campos
		
		$eliminarTitulo = $_SERVER['REQUEST_METHOD'] == "POST";

		if ($eliminarTitulo){
			$titulo = obtenerTitulo($_POST['id']);
			if (!$titulo){
				header("Location: ".URLADDR."/error.php?titulo=Titulo inexistente&mensaje=Debe ingresar un id de titulo valido");
			}
		}
?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Eliminar Titulo</title>
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
							<legend>Eliminar Título</legend>
						
							<form id="tituloEliminar" action="<?php echo URLADDR; ?>/titulos/eliminar.php" method="post">
								<table>
									<tr>
										<td>Id:</td>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo) {
											echo '<input id="id" name="id" type="text" />';
										} else {
											echo '<input id="id" name="id" type="text" value="'.$titulo['id'].'" readonly="readonly" />';
										}
										?>	
										</td>
									</tr>
									<tr>
										<td>Titulo:</td>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo) {
											echo '<input id="titulo" name="titulo" type="text" value="Deshabilitado" disabled="disabled" />';
										} else {
											echo '<input id="titulo" name="titulo" type="text" value="'.$titulo['titulo'].'" readonly="readonly" />';
										}
										?>
										</td>
									</tr>
									<tr>
										<td>Idioma:</td>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo) {
											echo '<input id="idioma" name="idioma" type="text" value="Deshabilitado" disabled="disabled" />';
										} else {
											echo '<input id="idioma" name="idioma" type="text" value="'.$titulo['idioma'].'" readonly="readonly" />';
										}
										?>
										</td>
									</tr>
									<tr>
										<td>Subtitulos:</td>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo) {
											echo '<input id="subtitulos" name="subtitulos" type="text" value="Deshabilitado" disabled="disabled" />';
										} else {
											echo '<input id="subtitulos" name="subtitulos" type="text" value="'.$titulo['subtitulos'].'" readonly="readonly" />';
										}
										?>
										</td>
									</tr>
									<tr>
										<td>Zona:</td>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo) {
											echo '<input id="zona" name="zona" type="text" value="Deshabilitado" disabled="disabled" />';
										} else {
											echo '<input id="zona" name="zona" type="text" value="'.$titulo['zona'].'" readonly="readonly" />';
										}
										?>
										</td>
									</tr>
									<tr>
										<td>Genero:</td>
										<td></td>
										<td>
										<?php
										if (!$eliminarTitulo) {
											echo '<select id="genero" name="genero" disabled="disabled">';
											echo '<option>Deshabilitado</option>';
											echo '</select>';
											 
										} else {
											echo '<select id="genero" name="genero" disabled="disabled">';
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
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
										<?php 
										if (!$eliminarTitulo){
											$submit = "Seleccionar Titulo";
										} else {
											$submit = "Eliminar Titulo";
										}
										echo '<input type="button" value="'.$submit.'" onclick="validarFormTituloEliminar()" />'; 
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
