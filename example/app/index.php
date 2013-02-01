<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="Facundo" content="Curso PHP - BIOS" />
	<title>e.Disks Usuarios - LOGIN</title>
    <link rel="stylesheet" type="text/css" href="EstilosProyecto.css" />
    <script type="text/javascript" src="FuncionesProyecto.js"></script>    
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>e.Disks</span><br />
    </div>
    <div id="headd">
      <span style="color: yellow;">Usuarios de e.Disks-</span><span style="color: gray;">HOME</span>      
    </div>
<!-- SECCION MENU -->
<?php
    if(isset($_SESSION["usrLOG"]) && isset($_SESSION["pssLOG"]))
    include "menu.inc";{                 

?>
    

<?php } ?>
<div id= "bien">
<?php

    if(isset($_SESSION["usrLOG"]) && isset($_SESSION["pssLOG"])){
         echo "Bienvenido:&nbsp;<b>$_SESSION[nomLOG]\n";    
    }
?>  
</div>
<?php
    if(!isset($_SESSION["usrLOG"]) && !isset($_SESSION["pssLOG"])){
?>
     <div id="login">
      <form id="frmLOG" action="Login.php" method="POST">
        <span>Usuario:</span>
        <input type="text"      name="USR" id="dataUSR" class="login"/>
        <span>Contraseña:</span>
        <input type="password"  name="PSS" id="dataPSS" class="login" />
        <input type="button" value="Iniciar" onclick="CheckLogin('frmLOG');"/>
      </form>     
     </div>  
<?php
    }
?>
<!-- presentción -->      
      <fieldset id="presenta">
       <legend id="titPresenta">e.Disks</legend>
        <p>
            Es una empresa que importa títulos de documentales sobre géneros pocos convencionales y 
            muy específicos, como ciencia, tecnología, salud, bélicos, historia, naturaleza, biología, etc. 
            Sus productos son solicitados en CD’s, DVD’s y Blu-ray <br />

        </p>
      </fieldset>        
    </div>
  </div>
</body>
</html>