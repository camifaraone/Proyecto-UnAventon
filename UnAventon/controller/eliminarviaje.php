<?php

require_once "../model/eliminarviaje.php";


$idviaje= ($_GET["idviaje"]);
$id = get_id($idviaje);

$d = get_postulados($idviaje);

if($d != 0){
			
			echo 'El viaje tiene gente postulada.';
			header("Location: ../controller/perfil.php?idautoincremental=".$id."Error=GentePostulada");
}
else {
		$a = del_viaje($idviaje,$id);
		header("Location: ../controller/misviajes.php?idautoincremental=".$id);
		$calificacion = geteliminar($id);
		$c = ($calificacion - 1);
		$b = actualizar_calificacion($c,$id);
}
?>