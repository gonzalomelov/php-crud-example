<?php
    // --------------------------------------
    // PROCESO LOGIN - VERIFICAR USUARIO
    // --------------------------------------
    // CONECTAR AL SERVIDOR
    include "Conexion.inc";
    // CAPTURAR DATOS DEL FORMULARIO DE LOGIN
    $user = $_POST["USR"];
    $pass = $_POST["PSS"];
    // CREAR SENTENCIA SQL PARA VERIFICAR USUARIO
    $sql = "SELECT * FROM Usuarios WHERE usrUSER='$user' AND pssUSER='$pass'";
    // EJECUTAR SENTENCIA SQL
    $result = mysql_query($sql,$conex);
    // VERIFICAR EXISTENCIA
    if (mysql_num_rows($result)==0) {
        // CERRAR CONEXION
        mysql_close($conex);
        header("Location: errorPAGE.php?alert=ATENCION!!!...&msg=Usuario y Contrase�a INCORRECTOS");
    } else {
        // TOMAR DATOS DEL USUARIO
        $regUSER    = mysql_fetch_array($result);
        $usuarioBD  = $regUSER["usrUSER"];
        $passwordBD = $regUSER["pssUSER"];
        $nomUserBD  = $regUSER["nomUSER"];        
        // INICIAR SESSION
        session_start();
        $_SESSION["usrLOG"]=$usuarioBD;
        $_SESSION["pssLOG"]=$passwordBD;                
        $_SESSION["nomLOG"]=$nomUserBD;        
        // CERRAR CONEXION
        mysql_close($conex);        
        header("Location: inicio.php");        
    } // endif        

?>