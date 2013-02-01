<?php
    // CONECTAR AL SERVIDOR
    include "conexion.inc";
    // CREAR SENTENCIA SQL
    $sql = "SELECT * FROM departamentos ORDER BY nomDTO";
    // EJECUTAR SENTENCIA SQL
    $result = mysql_query($sql,$conex);
    // GENERAR COMBO
    while ($reg = mysql_fetch_array($result)) {
        echo "<option value='$reg[idDTO]'>$reg[nomDTO]</option>\n";
    } // end while
    // CERRAR CONEXION
    mysql_close($conex);
?>