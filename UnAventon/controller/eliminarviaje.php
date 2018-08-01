<?php

require_once "../model/eliminarviaje.php";


$idviaje= ($_GET["idviaje"]);
$id = get_id($idviaje);

$d = get_postulados($idviaje);

if($d != 0){
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