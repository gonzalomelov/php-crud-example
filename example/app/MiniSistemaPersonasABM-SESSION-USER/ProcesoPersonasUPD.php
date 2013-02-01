<?php
    // -------------------------------
    // PROCESO ELIMINAR PERSONA
    // -------------------------------
    // CONTROLAR SESSION
    include "ControlSession.inc";    
    // CONECTAR AL SERVIDOR
    include "conexion.inc";
    // CAPTURAR DATOS A ACTUALIZAR
    $idUPD  = $_POST["ID"];
    $nomUPD = $_POST["NOM"];
    $dirUPD = $_POST["DIR"];
    $telUPD = $_POST["TEL"];
    $dtoUPD = $_POST["DTO"];                
    // CREAR SENTENCIA SQL PARA ELIMINAR PERSONA
    $sql = "UPDATE personas
               SET nomPERS = '$nomUPD',
                   dirPERS = '$dirUPD',
                   telPERS = '$telUPD',
                   dtoPERS = $dtoUPD
             WHERE idPERS = $idUPD";                                        
    // EJECUTAR SENTENCIA
    mysql_query($sql,$conex);    
    // CERRAR CONEXION
    mysql_close($conex);
    // VOLVER AUTOMATICAMENTE AL FORMULARIO DE ACTUALIZACION
    header("Location: FormPersonasUPD.php");
?>