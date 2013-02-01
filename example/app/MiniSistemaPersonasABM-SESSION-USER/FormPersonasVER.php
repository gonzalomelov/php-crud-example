<?php
    // CONTROLAR SESSION
    include "ControlSession.inc";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas en MySQL - VISUALIZAR</title>
    <link rel="stylesheet" type="text/css" href="EstilosPersonas.css" />
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">VISUALIZAR</span>
    </div>
<!-- SECCION MENU -->
<?php 
   include "menu.inc"; 
?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
        <form id="frm" action="ProcesoPersonasVER.php" method="GET">
          <fieldset id="form">
           <legend id="titform">Filtro por Departamento</legend>
            <table id="form">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>Departamento</td>
                <td>
                  <select name="DTO"
                          id="dataDTO"
                          title="Seleccione Departamento"
                  >
                    <option value="0">- Seleccionar Dpto. -</option>
               
               <?php
                    // CARGAR DATOS DE DEPARTAMENTOS
                    include "conexion.inc";
                    // CREAR SENTENCIA SQL PARA TRAER DATOS DE DEPARTAMENTOS
                    $sql = "SELECT * FROM departamentos ORDER BY nomDTO";
                    // EJECUTAR SENTENCIA SQL
                    $result = mysql_query($sql,$conex);
                    // GENERAR OPTIONES DEL COMBO
                    while ($reg = mysql_fetch_array($result)) {
                        echo "<option value='$reg[idDTO]'>$reg[nomDTO]</option>\n";
                    } // end while
                    //  CERRAR CONEXION
                    mysql_close($conex);
               ?>                                   
                 </select>
                </td>              
              </tr>
              <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar" />
                    <input type="reset"  value="Cancelar" />                
                </td>
              </tr>                                              
            </table>
           </fieldset>    
        </form>
    </div>
  </div>
  


</body>
</html>