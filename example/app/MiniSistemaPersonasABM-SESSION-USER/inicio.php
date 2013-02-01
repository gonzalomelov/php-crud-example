<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas con MySQL y Sesiones de Usuarios - INICIO</title>
    <link rel="stylesheet" type="text/css" href="EstilosPersonas.css" />
    <script type="text/javascript" src="FuncionesPersonas.js"></script>    
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">INICIO</span>
    </div>
<!-- SECCION MENU -->
<?php
    include "menu.inc"; 
?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
<!-- presentción -->      
      <fieldset id="presenta">
       <legend id="titPresenta">Presentación</legend>
        <p>
<?php
    // INICIO SESION Y BIENVENIDA
    session_start();
    echo "<span>Bienvenido:<b>$_SESSION[nomLOG]</span>\n";    
?>        
        </p>
      </fieldset>        
    </div>
  </div>
</body>
</html>