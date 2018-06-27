<?php


require_once ("../model/editarviaje.php");




$id= ($_GET["idviaje"]);
$datosviaje = get_viaje ($id);
$iduser = get_id($id);



if(isset($_POST["modif"])){


if(!empty($_POST['fecha']) && !empty($_POST['monto']) && !empty($_POST['duracion']) && !empty($_POST['hssalida']) && !empty($_POST['observaciones'])) {
	$fecha=$_POST['fecha'];
	$monto=$_POST['monto'];
	$duracion=$_POST['duracion'];
	$hssalida=$_POST['hssalida'];
	$observaciones=$_POST['observaciones'];
	
	
$modi = editarviaje($fecha, $monto, $duracion, $hssalida, $observaciones,$id);
	
header("Location: ../controller/editarviaje.php?idviaje=".$id);


} else {
	 $message = "Todos los campos deben estar completos";
}
}




include "../view/editarviaje.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} 

?>	