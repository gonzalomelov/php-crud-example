<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="Facundo" content="Curso PHP - BIOS" />
	<title>e.Disks Usuarios - LOGOUT</title>
    <link rel="stylesheet" type="text/css" href="EstilosProyecto.css" />
    <script type="text/javascript" src="FuncionesProyecto.js"></script>    
</head>

<?php
    session_start();
?>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>e.Disks</span><br />
    </div>
    <div id="headd">
      <span style="color: yellow;">Usuarios de e.Disks</span>    
    </div>
<!-- SECCION MENU -->
    
    <div id="menu">
    
        <a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <div class= "menuu">
        
        <ul>Títulos&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 

        </ul>                        
    
        
        <ul>Género&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

        </ul> 
        
        </div>                       
      <a href="Logout.php">Salir</a>
        
                            
  
    </div>
<!-- presentción -->      
      <fieldset id="presenta">
       <legend id="titPresenta">Presentación</legend>
        <p>
<?php

    echo "<span><h2>Muchas gracias <b>$_SESSION[usrLOG]</b>!!!!!!</span></h2>\n";    
    session_destroy();
?>        
        </p>
      </fieldset>        
    </div>
  </div>
</body>
</html>