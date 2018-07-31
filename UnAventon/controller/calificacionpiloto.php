<?php

require_once "../model/calificacionpiloto.php";




$id= ($_GET["idautoincremental"]);
$idviaje= ($_GET["idviaje"]);


$calificacion = $_POST['calificacion'];
$comentario= $_POST['comentario'];


$piloto = get_id_piloto($idviaje);
$comen = comentario_calificacion ($id, $idviaje, $comentario);
$idcomentario = get_id_comentario($id,$idviaje);


if ( $calificacion == 1) {
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($piloto);
	$b = ($a + 1);
	$positiva = positiva_calificacion($b,$piloto);
}
if( $calificacion == 2) { 
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	
}
if( $calificacion == 3){
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($piloto);
	$b = ($a - 1);
	$negativa = negativa_calificacion($b,$piloto);
}


//header("Location: ../controller/misviajes.php?idautoincremental=".$id);



include "../view/calificacionpiloto.html";


	

?>