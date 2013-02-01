function CheckForm() {
    // PREPARAR MENSAJE Y CONTROL DE ERRORES
    var mensaje = "ATENCION!!!... ingrese:\n";
    var error   = false;
    // ACCEDER A CAMPOS DE DATOS
    var nombre      = document.getElementById("frm").dataNOM.value;
    var direccion   = document.getElementById("frm").dataDIR.value;
    var telefono    = document.getElementById("frm").dataTEL.value;
    var departamento= document.getElementById("frm").dataDTO.value;
    // VALIDAR DATOS
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre\n";
    } // endif
    if (direccion=="") {
        error   = true;
        mensaje = mensaje+"Dirección\n";
    } // endif
    if (telefono=="") {
        error   = true;
        mensaje = mensaje+"Teléfono\n";
    } // endif
    if (telefono=="+598") {
        error   = true;
        mensaje = mensaje+"Teléfono con valor por defecto\n";
    } // endif
    if (isNaN(telefono)) {   // is Not a Number
        error   = true;
        mensaje = mensaje+"Teléfono debe ser numérico\n";
    } // endif                        
    if (departamento=="0") {
        error   = true;
        mensaje = mensaje+"Departamento\n";
    } // endif
    // CONTROLAR ERROR
    if (error) {
        window.alert(mensaje);
    } else {
        document.getElementById("frm").submit();
    } // endif            
} // end function

function CheckID(frm) {
    // PREPARAR MENSAJE Y CONTROL DE ERRORES
    var mensaje = "ATENCION!!!... ingrese:\n";
    var error   = false;
    // ACCEDER A CAMPOS DE DATOS
    var id = document.getElementById(frm).dataID.value;
    // VALIDAR DATOS
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID\n";
    } // endif
    if (isNaN(id)) {   // is Not a Number
        error   = true;
        mensaje = mensaje+"ID debe ser numérico\n";
    } // endif                        
    // CONTROLAR ERROR
    if (error) {
        window.alert(mensaje);
    } else {
        document.getElementById(frm).submit();
    } // endif            
} // end function

function CheckLogin(frm) {
    // PREPARAR MENSAJE Y CONTROL DE ERRORES
    var mensaje = "ATENCION!!!... ingrese:\n";
    var error   = false;
    // ACCEDER A CAMPOS DE DATOS
    var usuario  = document.getElementById(frm).dataUSR.value;
    var password = document.getElementById(frm).dataPSS.value;
    // VALIDAR DATOS
    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Usuario\n";
    } // endif
    if (password=="") {
        error   = true;
        mensaje = mensaje+"Contraseña\n";
    } // endif

    if (error) {
        window.alert(mensaje);
    } else {
        document.getElementById(frm).submit();
    } // endif            
} // end function
