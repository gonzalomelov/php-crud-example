<?php
    // SERVICIO DE CONEXION
    
    // CONECTAR AL SERVIDOR
    $conex = mysql_connect("localhost","root","");
    // CONTROLAR CONEXION AL SERVIDOR
    if (!$conex) {
        header("Location: errorPAGE.php?alert=ATENCION!!!...&msg=ID de persona INEXISTENTE");        
    } // endif
    // SELECCIONAR BASE DE DATOS
    $DataBase = mysql_select_db("MiniSistemaABM-SESSION",$conex);
    // CONTROLAR SELECCION DE BASE DE DATOS
    if (!$DataBase) {
        header("Location: errorPAGE.php?alert=ATENCION!!!...&msg=no se pudo seleccionar Base de Datos");        
    } // endif
?>