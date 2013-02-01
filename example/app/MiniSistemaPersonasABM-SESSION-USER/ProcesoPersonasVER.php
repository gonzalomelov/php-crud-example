<?php
    // CONTROLAR SESSION
    include "ControlSession.inc";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas con MySQL  - VISUALIZAR</title>
    <link rel="stylesheet" type="text/css" href="EstilosPersonas.css" />
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">VISUALIZAR</span>
    </div>
<!-- SECCION MENU -->
<?php include "menu.inc"; ?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
      <fieldset id="presenta">
       <legend id="titPresenta">Listado de Personas</legend>
        <table id="view">
        <?php
            // CONECTAR AL SERVIDOR
            include "conexion.inc";
            // CAPTURAR FILTRO
            $dpto = $_GET["DTO"];
            // determinar filtro
            if ($dpto==0) {
                $filtro = "";
            } else {
                $filtro = "WHERE idDTO = $dpto";
            } // endif
            // CAPTURAR ORDEN
            if (isset($_GET["ORD"])) {
                $orden = $_GET["ORD"];                
            } else {
                $orden = "idPERS";
            } // endif
            // ARMAR SENTENCIA SQL
            $sql = "SELECT p.idPERS,p.nomPERS,p.dirPERS,p.telPERS,d.nomDTO
                      FROM personas AS p    
                INNER JOIN departamentos AS d
                        ON p.dtoPERS = d.idDTO
                        $filtro 
                  ORDER BY $orden";
            // EJECUTAR SENTENCIA SQL
// die($sql); // depurar sentencia sql
            $result = mysql_query($sql,$conex);
            // CONTROLAR EXISTECIA DE DATOS
            if (mysql_num_rows($result)==0) {
                header("Location: errorPage.php?titError=ATENCION!!!..&msgError=No existen personas para el departamento seleccionado");
            } // endif
            // GENERAR CABECERA DE GRILLA DE DATOS
            echo "
              <tr>
                <th><a href='ProcesoPersonasVER.php?ORD=idPERS&DTO=$dpto'>ID</a></th>          
                <th><a href='ProcesoPersonasVER.php?ORD=nomPERS&DTO=$dpto'>NOMBRE</a></th>
                <th><a href='ProcesoPersonasVER.php?ORD=dirPERS&DTO=$dpto'>DIRECCION</a></th>
                <th><a href='ProcesoPersonasVER.php?ORD=telPERS&DTO=$dpto'>TELEFONO</a></th>
                <th><a href='ProcesoPersonasVER.php?ORD=nomDTO&DTO=$dpto'>DEPARTAMENTO</a></th>                                    
              </tr>
          ";            
            // RECORRER Y MOSTRAR RESULTADO
            $fila = 1; // contador de fila para estilo            
            while ($reg = mysql_fetch_array($result) ) {
                // IMPRIMIR DATOS
                // seleccionar estilo para fila par impar
                $resto = $fila % 2;
                if ($resto==0) {
                    echo "<tr class='filaPAR'>\n";  // genera fila con estilo par
                } else {
                    echo "<tr class='filaIMP'>\n";  // genera fila con estilo impar
                } // endif
                // imprimir registro
                echo "  <td style='width: 30px;'>$reg[idPERS] </td>\n";  // muestra valor para columna ID
                echo "  <td style='width: 200px;'>$reg[nomPERS]</td>\n";  // muestra valor para columna NOMBRE
                echo "  <td style='width: 200px;'>$reg[dirPERS]</td>\n";  // muestra valor para columna DIRECCION
                echo "  <td style='width: 100px;'>$reg[telPERS]</td>\n";  // muestra valor para columna TELEFONO
                echo "  <td style='width: 200px;'>$reg[nomDTO]</td>\n";  // muestra valor para columna DEPARTAMENTO
                echo "</tr>\n";                     // cerrar fila de la tabla                                                                
                $fila++;                            // incrementar número de fila
            } //
            // CERRAR CONEXION
            mysql_close($conex);
        ?>
        </table>
      </fieldset>        
    </div>
  </div>
</body>
</html>