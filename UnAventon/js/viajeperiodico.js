function runSubmit (form)  {
		if (form.fechaviaje.value == "") {
			alert("Ingresar fecha inicio");
			return false;
		}
		if (form.fechaviaje.value == "") {
			alert("Ingresar fecha fin");
			return false;
		}
		if (form.dias.value == ""){
			alert("Ingresar día/s del viaje a realizar");
			return false;
		}
		if (form.preciototal.value == ""){
			alert("Ingresar precio del viaje");
			return false;
		}
		if (form.horasalida.value == ""){
			alert("Ingresar hora del viaje");
			return false;
		}
		if (form.origen.value == ""){
			alert("Ingresar origen");
			return false;
		}
		if (form.destino.value == ""){
			alert("Ingresar destino");
			return false;
		}
		if (form.observaciones.value == ""){
			alert("Ingresar observaciones");
			return false;
		}
		if (form.vehiculo.value == ""){
			alert("Elija un vehículo");
			return false;
		}
		return true;	
	}