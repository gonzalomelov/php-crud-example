<?php
    // CONTROL DE SESSION   
    session_start();
    if ( (!isset($_SESSION["usrLOG"])) && (!isset($_SESSION["pssLOG"])) ) {
        header("Location: errorPAGE.php?alert=ATENCION!!!...&msg=Debe iniciar sesi�n como Usuario");        
    } // endif
?>