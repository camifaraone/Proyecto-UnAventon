<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra el error
require_once "../model/calificacionacompaniante.php";


$id= ($_GET["idautoincremental"]);

$idviaje = ($_GET["idviaje"]);

$idpiloto = get_id_piloto ($idviaje);


$calificacion = $_POST['calificacion'];
$comentario= $_POST['comentario'];


if ( $calificacion == 1) {
	
	$calif = calificacion_positiva($calificacion,$id,$idpiloto,$idviaje,$comentario);
	$a = get_calificacion($id);
	$b = ($a + 1);
	$positiva = positiva_calificacion($b,$id);
}
if( $calificacion == 2) {
	$calif = calificacion_positiva($calificacion,$id,$idpiloto,$idviaje,$comentario);
	
}
if( $calificacion == 3){
	$calif = calificacion_positiva($calificacion,$id,$idpiloto,$idviaje,$comentario);
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