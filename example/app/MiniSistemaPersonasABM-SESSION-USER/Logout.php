<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="Facundo" content="Curso PHP - BIOS" />
	<title>e.Disks Usuarios - LOGOUT</title>
    <link rel="stylesheet" type="text/css" href="EstilosProyecto.css" />
    <script type="text/javascript" src="FuncionesProyecto.js"></script>    
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>e.Disks y</span><br />
      <span>Usuarios de e.Disks -</span><span style="color: orange;">LOGOUT</span>
    </div>
<!-- SECCION MENU -->
<?php
    if(isset($_SESSION["usrLOG"]) && isset($_SESSION["pssLOG"])){                 

?>
    
    <div id="menu">
    
        <a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <div class= "menuu">
        
        <ul>Títulos&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    
    
                                <li><a href="FormProyectoINS.php">Insertar</a></li> 
                                <li><a href="FormPersonasDEL.php">Eliminar</a></li>
                                <li><a href="FormPersonasUPD.php">Actualizar</a></li>
        </ul>                        
    
        
        <ul>Género&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        
                                <li><a href="FormProyectoINS.php">Insertar</a></li> 
                                <li><a href="FormPersonasUPD.php">Actualizar</a></li>
        </ul> 
        
        </div>                       
      <a href="Logout.php">Salir</a>
        
                            
  
    </div>
<?php } ?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
<!-- presentción -->      
      <fieldset id="presenta">
       <legend id="titPresenta">Presentación</legend>
        <p>
<?php

    session_start();
    echo "<span>Muchas gracias <b>$_SESSION[usrLOG]</b></span>\n";    
    session_destroy();
?>        
        </p>
      </fieldset>        
    </div>
  </div>
</body>
</html>