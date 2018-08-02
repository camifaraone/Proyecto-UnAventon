<?php

require_once "../model/eliminarviaje.php";


$idviaje= ($_GET["idviaje"]);
$id = get_id($idviaje);

$d = get_postulados($idviaje);


if($d != 0){
		$calificacion = 3;
		$motivo = "se elimino un viaje con usuarios postulados al mismo.";
		$idpilotosistem = -1;
		$calif = calificacion_negativa($calificacion,$id,$idpilotosistem,$idviaje,$motivo);
	
			$a = del_viaje($idviaje,$id);
			$calificacion = geteliminar($id);
			$c = ($calificacion - 1);
			$b = actualizar_calificacion($c,$id);
			header("Location: ../controller/misviajes.php?idautoincremental=".$id);
}
else {
		$a = del_viaje($idviaje,$id);
		header("Location: ../controller/misviajes.php?idautoincremental=".$id);
		
}
?>