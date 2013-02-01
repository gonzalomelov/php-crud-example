<?php
    // CREAR SENTENCIA SQL
    $sql = "SELECT * FROM departamentos ORDER BY nomDTO";
    // EJECUTAR SENTENCIA SQL
    $result = mysql_query($sql,$conex);
    // GENERAR COMBO
    while ($regDTO = mysql_fetch_array($result)) {
        // SELECCIONAR DEPARTAMENTO DE LA PERSONA
        if ($regDTO['idDTO']==$regPERS['dtoPERS']) {
            echo "<option value='$regDTO[idDTO]' selected>$regDTO[nomDTO]</option>\n";            
        } else {
            echo "<option value='$regDTO[idDTO]'>$regDTO[nomDTO]</option>\n";            
        }
        
    } // end while
    // CERRAR CONEXION
    mysql_close($conex);
?>