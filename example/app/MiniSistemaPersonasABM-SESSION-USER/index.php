<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas con MySQL y Sesiones de Usuarios - LOGIN</title>
    <link rel="stylesheet" type="text/css" href="EstilosPersonas.css" />
    <script type="text/javascript" src="FuncionesPersonas.js"></script>    
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">LOGIN</span>      
    </div>
<!-- SECCION MENU -->
<?php
    include "menu.inc"; 
?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
<!-- formulario de login -->
     <div id="login">
      <form id="frmLOG" action="Login.php" method="POST">
        <span>Usuario:</span>
        <input type="text"      name="USR" id="dataUSR" class="login"/><br />
        <span>Contraseña:</span>
        <input type="password"  name="PSS" id="dataPSS" class="login" /><br />
        <input type="button" value="Iniciar" onclick="CheckLogin('frmLOG');"/>
      </form>     
     </div>
<!-- presentción -->      
      <fieldset id="presenta">
       <legend id="titPresenta">Presentación</legend>
        <p>
            Este es un ejemplo donde intentamos aplicar todo lo
            aprendido en el curso, incluyendo el uso div's como 
            elemento de diseño y maquetación de cada página del
            sistema. Usamos javascript para validar principalmente
            los formularios, pero además para realizar otras interaccciones
            con el usuario.<br />
            <br />
            El sistema parmite realizar Altas, Bajas, Modificaciones de
            Personas y mostrar una grilla. Esta grilla además permite 
            seleccionar la columna por la que puede ser ordenada. Por otra 
            parte, al seleccionar la opción de visualizar, se presenta una 
            lista desplegable (combo box) con los departamentos ordenados 
            alfabéticamente, para seleccionar un filtro en la presentación 
            del listado.<br />
            <br />
            En todo el sistema se presenta el combo box de los departamentos
            creado en forma dinámica, es decir, tomando los datos de la tabla
            correspondiente en la Base de Datos.<br />
            <br />
            Tanto en las bajas como en las actualizaciones de personas, se 
            selecciona el ID y se traen los datos actuales para luego confirmar
            la operación de eliminación o actualización.<br />
            Existe además un control de posibles errores, generando una página
            que mantiene el diseño de todo el sitio.<br />
            <br />
            <b>En esta versión, utilizamos SESIONES para el manejo de Usuario y
            contraseña que permita ingresar en el sistema.</b>
        </p>
      </fieldset>        
    </div>
  </div>
</body>
</html>