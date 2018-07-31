<?php

require_once "../model/calificacionpiloto.php";




$id= ($_GET["idautoincremental"]);
$idviaje= ($_POST["idviaje"]);

var_dump($idviaje);
$calificacion = $_POST['calificacion'];
$comentario= $_POST['comentario'];

/*
$piloto = get_id_piloto($idviaje);
$comen = comentario_calificacion ($id, $idviaje, $comentario);
$idcomentario = get_id_comentario($id,$idviaje);

if ( $calificacion == 1) {
	$calif = calificacion_positiva($calificacion,$id,$idviaje,$idcomentario);
	$positiva = positiva_calificacion($piloto);
}
if( $calificacion == 2) { 
	$calif = calificacion_neutral($calificacion,$id,$idviaje,$idcomentario);
	
}
if( $calificacion == 3){
	$calif = calificacion_mal($calificacion,$id,$idviaje,$idcomentario);
	$negativa = negativa_calificacion($piloto);
}


header("Location: ../controller/misviajes.php?idautoincremental=".$id);

*/

include "../view/calificacionpiloto.html";


	

?>