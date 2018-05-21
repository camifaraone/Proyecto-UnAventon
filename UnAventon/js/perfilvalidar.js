
	function runSubmit (form)  {
		if (form.nombreusuario.value == ""){
			alert("Ingresar nombre usuario");
			return false;
		}
		if (form.contrasenia.value.length < 8) {
			alert("Ingresar clave");
			return false;
		}
		if (form.confirmarcontrasenia.value.length < 8) {
			alert("Repetir nueva clave con ocho o más caracteres");
			return false;
		}
		if (form.contrasenia.value != form.confirmarclave.value) { 
			alert("Las claves no coinciden");
			return false;
		}
		if (form.nombre.value == ""){
			alert("Ingresar nombre");
			return false;
		}
		if (form.apellido.value == ""){
			alert("Ingresar apellido");
			return false;
		}
		if (form.email.value == "" || form.email.value.indexOf ('@', 0) == -1) {
			alert("Ingresar un E-mail valido");
			return false;
		}
		
		if (form.telefono.value == ""){
			alert("Ingresar número de teléfono");
			return false
		}
		if (form.fechanacimiento.value == ""){
			alert("Ingresar fecha de nacimiento");
			return false;
		}
		return true;	
	}			
                      
