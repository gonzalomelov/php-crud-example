function validarFormLogin(){
	var form = document.getElementById('loginForm');
	var usuario = form.usuarioLogin.value;
	var password = form.passwordLogin.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (usuario == "") {
		mensaje = mensaje+"Ingrese el Usuario"+"\n";
		error = true;
	}
	
	if (password == "") {
		mensaje = mensaje+"Ingrese el Password"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('loginForm').submit();
	}
}

function validarFormTituloInsertar() {
	var form = document.getElementById('tituloInsertar');
	var titulo = form.titulo.value;
	var idioma = form.idioma.value;
	var subtitulos = form.subtitulos.value;
	var zona = form.zona.value;
	var genero = form.genero.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (titulo == "") {
		mensaje = mensaje+"Ingrese el Titulo"+"\n";
		error = true;
	}
	
	if (idioma == "") {
		mensaje = mensaje+"Ingrese el Idioma"+"\n";
		error = true;
	}
	
	if (subtitulos == "") {
		mensaje = mensaje+"Ingrese el Subtitulos"+"\n";
		error = true;
	}
	
	if (zona == "") {
		mensaje = mensaje+"Ingrese el Zona"+"\n";
		error = true;
	}
	
	if (genero == "") {
		mensaje = mensaje+"Ingrese el Genero"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('tituloInsertar').submit();
	}
}

function validarFormTituloEliminar() {
	var form = document.getElementById('tituloEliminar');
	var id = form.id.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (id == "") {
		mensaje = mensaje+"Ingrese el Id"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('tituloEliminar').submit();
	}
}

function validarFormTituloActualizarSeleccionar() {
	var form = document.getElementById('tituloActualizar');
	var id = form.id.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (id == "") {
		mensaje = mensaje+"Ingrese el Id"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('tituloActualizar').submit();
	}
}

function validarFormTituloActualizarSubmit() {
	var form = document.getElementById('tituloActualizar');
	var id = form.id.value;
	var titulo = form.titulo.value;
	var idioma = form.idioma.value;
	var subtitulos = form.subtitulos.value;
	var zona = form.zona.value;
	var genero = form.genero.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (id == "") {
		mensaje = mensaje+"Ingrese el Id"+"\n";
		error = true;
	}
	
	if (titulo == "") {
		mensaje = mensaje+"Ingrese el Titulo"+"\n";
		error = true;
	}
	
	if (idioma == "") {
		mensaje = mensaje+"Ingrese el Idioma"+"\n";
		error = true;
	}
	
	if (subtitulos == "") {
		mensaje = mensaje+"Ingrese el Subtitulos"+"\n";
		error = true;
	}
	
	if (zona == "") {
		mensaje = mensaje+"Ingrese el Zona"+"\n";
		error = true;
	}
	
	if (genero == "") {
		mensaje = mensaje+"Ingrese el Genero"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('tituloActualizar').submit();
	}
}

function validarFormGeneroInsertar() {
	var form = document.getElementById('generoInsertar');
	var genero = form.genero.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (genero == "") {
		mensaje = mensaje+"Ingrese el Genero"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('generoInsertar').submit();
	}
}

function validarFormGeneroActualizarSeleccionar() {
	var form = document.getElementById('generoActualizar');
	var id = form.id.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (id == "") {
		mensaje = mensaje+"Ingrese el Id"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('generoActualizar').submit();
	}
}

function validarFormGeneroActualizarSubmit() {
	var form = document.getElementById('generoActualizar');
	var id = form.id.value;
	var genero = form.genero.value;
	
	var mensaje = "Atención:"+"\n";
	var error = false;
	
	if (id == "") {
		mensaje = mensaje+"Ingrese el Id"+"\n";
		error = true;
	}
	
	if (genero == "") {
		mensaje = mensaje+"Ingrese el Genero"+"\n";
		error = true;
	}
	
	if (error){
		alert(mensaje);
	} else {
		document.getElementById('generoActualizar').submit();
	}
}