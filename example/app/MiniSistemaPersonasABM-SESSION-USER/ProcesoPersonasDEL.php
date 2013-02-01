<?php
    // -------------------------------
    // PROCESO ELIMINAR PERSONA
    // -------------------------------
    // CONTROLAR SESSION
    include "ControlSession.inc";    
    // CONECTAR AL SERVIDOR
    include "conexion.inc";
    // CAPTURAR ID A ELIMINAR
    $id = $_POST["ID"];
    // CREAR SENTENCIA SQL PARA ELIMINAR PERSONA
    $sql = "DELETE FROM personas WHERE idPERS = $id";
    // EJECUTAR SENTENCIA
    mysql_query($sql,$conex);    
    // CERRAR CONEXION
    mysql_close($conex);
    // VOLVER AUTOMATICAMENTE AL FORMULARIO DE ELIMINACION
    header("Location: FormPersonasDEL.php");
?>