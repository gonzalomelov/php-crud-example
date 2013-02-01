<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="Facundo" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas con MySQL  - ERROR</title>
    <link rel="stylesheet" type="text/css" href="EstilosProyecto.css" />
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">ERROR</span>
    </div>
<!-- SECCION MENU -->
<?php include "menu.inc"; ?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
      <fieldset id="presenta">
       <legend id="titPresenta">ERROR!!!...</legend>
       <?php
         $alerta  = $_GET["alert"];
         $mensaje = $_GET["msg"]; 
         echo "<span id='alerta'>$alerta</span><br />\n";
         echo "<span id='error'>$mensaje</span><br />\n";         
       ?>
      </fieldset>        
    </div>
  </div>
</body>
</html>