<?php

error_reporting(E_ALL ^ E_NOTICE); //no muestra el error
require_once "../model/calificacionpiloto.php";




$id= ($_GET["idautoincremental"]);
$idviaje= ($_GET["idviaje"]);


$calificacion = $_POST['calificacion'];
$comentario= $_POST['comentario'];


$piloto = get_id_piloto($idviaje);




if ( $calificacion == 1) {
	$comen = comentario_calificacion ($id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($id,$idviaje);
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($piloto);
	$b = ($a + 1);
	$positiva = positiva_calificacion($b,$piloto);
}
if( $calificacion == 2) { 
	$comen = comentario_calificacion ($id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($id,$idviaje);
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	
}
if( $calificacion == 3){
	$comen = comentario_calificacion ($id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($id,$idviaje);
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($piloto);
	$b = ($a - 1);
	$negativa = negativa_calificacion($b,$piloto);
}

if ( $calif == true) {
	
	
	echo "<html><script> alert('Calificación realizada con éxito');</script></html>"; 
	echo "<html><script> document.location.href='../controller/misviajes.php?idautoincremental=".$id."';</script></html>";

}


include "../view/calificacionpiloto.html";


	

?>