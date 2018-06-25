<?php
	include "../controller/chequeardisponibilidad.php";
	require_once "db.php";
	require_once "../model/viajes.php";

	function chequearsuperposicion($fechaviaje,$duracion,$horasalida,$idvehiculo){
		$viajes=get_viajes();
		for ($i=0; $i < ; $i++) { 
			$fecha="".$viajes[$i]["fecha"].$viajes[$i]["hssalida"];
			$hora="".$viajes[i]["duracion"];
			if($idvehiculo==$viajes[i]["idvehiculo"]){
				if(!checktripdates($fechaviaje,$duracion,$fecha,$hora)){
					return false;
				}
			}
		}
		return true;
	}
?>