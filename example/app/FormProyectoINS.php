<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="Facundo" content="Curso PHP - BIOS" />
	<title>e.Disks - INSERTAR</title>
    <link rel="stylesheet" type="text/css" href="EstilosProyecto.css" />
    <script type="text/javascript" src="FuncionesProyecto.js"></script>
</head>

<body>
  <div id="contenedor">
<!-- SECCION CABECERA -->
    <div id="head">
      <span>e.Disks</span><br />
    </div>
    <div id="headd">
      <span style="color: yellow;">Sesiones de Usuarios -</span><span style="color: gray;">INSERTAR</span>
    </div>
<!-- SECCION MENU -->
<?php include "menu.inc"; ?>
<!-- SECCION CONTENIDO -->
    <div id="contenido">
        <form id="frm" action="ProyectotituloINS.php" method="POST">
          <fieldset id="form">
           <legend id="titform">Ingreso de Datos</legend>
            <table id="form">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>
                  <input  type="text" 
                          name="NOM"
                          id="dataNOM"
                          maxlength="30"
                          title="Máximo 30 caracteres"
                  />
                </td>              
              </tr>
              <tr>
                <td>Dirección</td>
                <td>
                  <input  type="text" 
                          name="DIR"
                          id="dataDIR"
                          maxlength="50"
                          title="Máximo 50 caracteres"
                  />
                </td>              
              </tr>                
              <tr>
                <td>Teléfono</td>
                <td>
                  <input  type="text" 
                          name="TEL"
                          id="dataTEL"
                          maxlength="12"
                          title="Máximo 12 dígitos"
                          value="+598"
                  />
                </td>              
              </tr>
              <tr>
                <td>Generos</td>
                <td>
                  <select name="Genero" id="ID" title="Seleccionar Género">
                    <option value="0">- Seleccionar Dpto. -</option>
                    <?php
                      // GENERAR COMBO DINAMICO CON DATOS DE LA TABLA DEPARTAMENTOS
                      include "LoadGenero.inc";
                    ?>                                                                                                    
                  </select>
                </td>              
              </tr>
              <tr>
                <td colspan="2">
                    <input type="button" value="Enviar" onclick="CheckForm();"/>
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