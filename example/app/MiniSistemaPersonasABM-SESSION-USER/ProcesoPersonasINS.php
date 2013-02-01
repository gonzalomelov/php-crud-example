<?php
    // PROCESO GUARDAR PERSONAS EN BASE DE DATOS
    // (ProcesoPersonasINS.php)
    // CONTROLAR SESSION
    include "ControlSession.inc";    
    include "conexion.inc";
    // CAPTURAR DATOS DEL FORMULARIO
    $nombre         = $_POST["NOM"];
    $direccion      = $_POST["DIR"];
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // ARMAR SENTENCIA SQL
    $sql  = "INSERT INTO personas ";
    $sql .= "(nomPERS,dirPERS,telPERS,dtoPERS) ";
    $sql .= "VALUES ('$nombre','$direccion','$telefono',$departamento)";
    // EJECUTAR SENTENCIA SQL
    mysql_query($sql,$conex);
    // CERRAR CONEXION
    mysql_close($conex);
    // VOLVER AUTOMATICAMENTE AL FORMULARIO
    header("Location: FormPersonasINS.php");
?>