function runSubmit (form)  {
		if (form.marca.value == ""){
			alert("Ingresar marca del auto");
			return false;
		}
		if (form.modelo.value == ""){
			alert("Ingresar modelo del auto");
			return false;
		}
		if (form.color.value == ""){
			alert("Ingresar color del auto");
			return false;
		}
		if (form.patente.value == ""){
			alert("Ingresar patente del auto");
			return false;
		}
		return true;	
	}