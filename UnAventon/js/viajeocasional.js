function runSubmit (form)  {
		if (form.fechaviaje.value == "") {
			alert("Ingresar fecha inicio");
			return false;
		}
		if (form.preciototal.value == ""){
			alert("Ingresar precio del viaje");
			return false;
		}
		if (form.duracion.value == ""){
			alert("Ingresar duración del viaje");
			return false;
		}
		if (form.horasalida.value == ""){
			alert("Ingresar hora salida");
			return false;
		}
		if (form.cantidadasientos.value == ""){
			alert("Ingresar cantidad asientos");
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