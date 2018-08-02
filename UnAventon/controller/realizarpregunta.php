<?php


require_once "../model/realizarpregunta.php";

$id= ($_GET["idautoincremental"]);
$idviaje= ($_GET["idviaje"]);

$iddueño = get_id ($idviaje);


if(!empty($_POST['comentario'])) {
	
	
	$comentario=$_POST['comentario'];
	

	$comentario = realizarcomentario($comentario,$id,$iddueño,$idviaje);

	header("Location: ../controller/verpreguntas.php?idviaje=".$idviaje."&idautoincremental=".$id."");
	
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}






include "../view/realizarpregunta.html";
	

?>