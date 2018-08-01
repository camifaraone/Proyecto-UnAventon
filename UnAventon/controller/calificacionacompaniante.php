<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra el error
require_once "../model/calificacionacompaniante.php";


$id= ($_GET["idautoincremental"]);

$idviaje = ($_GET["idviaje"]);

$idpiloto = get_id_piloto ($idviaje);


$calificacion = $_POST['calificacion'];
$comentario= $_POST['comentario'];


if ( $calificacion == 1) {
	
	$comen = comentario_calificacion ($idpiloto, $id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($idpiloto,$id,$idviaje);
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($id);
	$b = ($a + 1);
	$positiva = positiva_calificacion($b,$id);
}
if( $calificacion == 2) {
	$comen = comentario_calificacion ($id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($id,$idviaje);	
	$calif = calificacion_positiva($calificacion,$idcomentario,$idacompaniante,$idviaje);
	
}
if( $calificacion == 3){
	$comen = comentario_calificacion ($idpiloto, $id, $idviaje, $comentario);
	$idcomentario = get_id_comentario($idpiloto,$id,$idviaje);
	$calif = calificacion_positiva($calificacion,$idcomentario,$id,$idviaje);
	$a = get_calificacion($id);
	$b = ($a - 1);
	$negativa = negativa_calificacion($b,$id);
}

if ( $calif == true) {
	
	
	echo "<html><script> alert('Calificación realizada con éxito');</script></html>"; 
	echo "<html><script> document.location.href='../controller/verpostulantes.php?idautoincremental=".$id."&&idviaje=".$idviaje."';</script></html>";

}


include "../view/calificacionacompaniante.html";
	

?>