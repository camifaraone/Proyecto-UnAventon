<?php


require_once "../model/realizarpregunta.php";

$id= ($_GET["idautoincremental"]);



$viaje = get_viaje($id);




 





if(!empty($_POST['comentario'])) {
	
	
	$idviaje = $_POST['viaje'];
	$comentario=$_POST['comentario'];
	

	$comentario = realizarcomentario($id,$idviaje,$comentario);

	header("Location: ../controller/vercomentarios.php?idviaje=".$viaje[$i]["idviaje"]."&idautoincremental=".$id."");
	
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}






include "../view/realizarpregunta.html";
	

?>