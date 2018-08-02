<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once "../model/respuesta.php";

$id= ($_GET["idautoincremental"]);
$idviaje= ($_GET["idviaje"]);
$idpregun= ($_GET["idpregun"]);

$preg = get_pregunta($idviaje,$idpregun);




if(!empty($_POST['comentario'])) {
	
	
	
	$respuesta=$_POST['comentario'];
	

	$realizar_respuesta = realizarrespuesta($preg,$respuesta,$id,$idviaje);
	$idrespuesta = get_idrespuesta ($preg);
	$respuesta = respuesta_realizada ($idrespuesta,$preg);

	header("Location: ../controller/verpreguntas.php?idviaje=".$idviaje."&idautoincremental=".$id."");
	
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}



include "../view/respuesta.html";
	

?>