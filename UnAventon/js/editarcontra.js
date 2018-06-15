	function runSubmit (form)  {
		
		if (form.nuevacontrasenia.value.length < 8) {
			alert("Ingresar nueva clave con ocho o más caracteres");
			return (false);
		}
		if (form.confirmarcontrasenia.value.length < 8) {
			alert("Repetir nueva clave con ocho o más caracteres");
			return (false);
		}
		if (form.nuevacontrasenia.value != form.confirmarcontrasenia.value) { 
			alert("Las claves no coinciden");
			return false;
		}
		return true;	
	}			
