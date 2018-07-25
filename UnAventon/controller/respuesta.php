<?php


require_once "../model/respuesta.php";

$id= ($_GET["idautoincremental"]);



$preg = get_pregunta($id);



if(!empty($_POST['respuesta'])) {
	
	
	$idcomentario = $_POST['comentario'];
	$respuesta=$_POST['respuesta'];
	

	$respuesta = realizarrespuesta($id,$idcomentario,$respuesta);

	header("Location: ../controller/vercomentarios.php?idviaje=".$viaje[$i]["idviaje"]."&idautoincremental=".$id."");
	
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}



include "../view/respuesta.html";
	

?>