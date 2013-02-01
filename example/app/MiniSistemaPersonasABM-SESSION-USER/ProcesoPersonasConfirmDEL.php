<?php
    // CONTROLAR SESSION
    include "ControlSession.inc";
?>
<?php
    // CONFIRMACION DE ELIMINACION
    
    // CAPTURAR ID
    $id = $_POST["ID"];
    // CONECTAR AL SERVIDOR
    include "conexion.inc";
    // CREAR SENTENCIA SQL PARA BUSCAR EL ID
    $sql = "SELECT * FROM personas WHERE idPERS=$id";
    // EJECUTAR SENTENCIA SQL
    $result = mysql_query($sql,$conex);
    // CONTROLAR EXISTENCIA
    if (mysql_num_rows($result)==0) {
        header("Location: errorPAGE.php?titError=ATENCION!!!...&msgError=ID de persona INEXISTENTE");
    } // endif
    // OBTENER DATOS DEL REGISTRO DEL ID
    $regPERS = mysql_fetch_array($result);
    $idFRM   = $regPERS["idPERS"];
    $nomFRM  = $regPERS["nomPERS"];
    $dirFRM  = $regPERS["dirPERS"];
    $telFRM  = $regPERS["telPERS"];
    $dtoFRM  = $regPERS["dtoPERS"];                
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Curso PHP - BIOS" />
	<title>MiniSistema ABM de Personas con MySQL - ELIMINAR</title>
    <link rel="stylesheet" type="text/css" href="EstilosPersonas.css" />
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>MiniSistema ABM de Personas con MySQL y</span><br />
      <span>Sesiones de Usuarios -</span><span style="color: orange;">ELIMINAR</span>
    </div>
<!-- SECCION MENU -->
<?php include "menu.inc"; ?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
        <form id="frmDEL" action="ProcesoPersonasDEL.php" method="POST">
          <fieldset id="form">
           <legend id="titform">Ingreso de Datos</legend>
            <table id="form">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>ID</td>
                <td>
                  <input  type="text" 
                          name="ID"
                          id="dataID"
                          maxlength="5"
                          title="M�ximo 5 d�gitos"
               <?php echo "value='$idFRM'"; ?>
                          disabled="true"
                          class="deshabilitado"               
                  />
                </td>              
              </tr>              
              <tr>
                <td>Nombre</td>
                <td>
                  <input  type="text" 
                          name="NOM"
                          id="dataNOM"
                          maxlength="30"
                          title="Deshabilitado"
                          disabled="true"
                          class="deshabilitado"
               <?php echo "value='$nomFRM'"; ?>
                  />
                </td>              
              </tr>
              <tr>
                <td>Direcci�n</td>
                <td>
                  <input  type="text" 
                          name="DIR"
                          id="dataDIR"
                          maxlength="50"
                          title="Deshabilitado"
                          disabled="true"
                          class="deshabilitado"
               <?php echo "value='$dirFRM'"; ?>                                                                                                        
                  />
                </td>              
              </tr>                
              <tr>
                <td>Tel�fono</td>
                <td>
                  <input  type="text" 
                          name="TEL"
                          id="dataTEL"
                          maxlength="12"
                          title="Deshabilitado"
               <?php echo "value='$telFRM'"; ?>
                          disabled="true"
                          class="deshabilitado"                          
                  />
                </td>              
              </tr>
              <tr>
                <td>Departamento</td>
                <td>
                  <select name="DTO" 
                          id="dataDTO" 
                          title="Deshabilitado"
                          disabled="true"
                          class="deshabilitado"                          
                  >
                    <option value="0">--- deshabilitado ---</option>
                    <?php
                      // GENERAR COMBO DINAMICO CON DATOS DE LA TABLA DEPARTAMENTOS
                      include "LoadDptosSEL.inc";
                    ?>                                                                                                    
                  </select>
                </td>              
              </tr>
              <tr>
                <td colspan="2">
                    <input type="button" value="Enviar" onclick="CheckID('frmDEL');"/>
                    <input type="reset"  value="Cancelar" />                
                </td>
              </tr>
            </table>
<!--             
            // CREAR INPUT OCULTO PARA PASAR EL ID DE PERSONA
            // realizamos esto porque al estar deshabilitado el input del ID
            // del formulario, provoca que el valor no sea pasado al proceso
            // sin importar que sea enviado por POST o GET.
-->
            <input  type="hidden" 
                    name="ID"
       <?php echo "value='$idFRM'"; ?>
           />            
           </fieldset>    
        </form>
    </div>
  </div>
</body>
</html>