<?php
    // CONECTAR AL SERVIDOR
    include "conexion.inc";
    // CREAR SENTENCIA SQL
    $sql = "SELECT * FROM Genero ORDER BY Genero";
    // EJECUTAR SENTENCIA SQL
    $result = mysql_query($sql,$conex);
    // GENERAR COMBO
    while ($reg = mysql_fetch_array($result)) {
        echo "<option value='$reg[ID]'>$reg[Genero]</option>\n";
    } // end while
    // CERRAR CONEXION
    mysql_close($conex);
?>