function runSubmit (form)  {
		if (form.fecha.value == "") {
			alert("Ingresar fecha inicio");
			return false;
		}
		if (form.monto.value == ""){
			alert("Ingresar precio del viaje");
			return false;
		}
		if (form.duracion.value == ""){
			alert("Ingresar duración del viaje");
			return false;
		}
		if (form.hssalida.value == ""){
			alert("Ingresar hora salida");
			return false;
		}
		if (form.observaciones.value == ""){
			alert("Ingresar observaciones");
			return false;
		}
		return true;	
	}