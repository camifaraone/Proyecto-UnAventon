<?php


require_once ("../model/buscador.php");


$id= ($_GET["idautoincremental"]);


$busqueda = ($_POST['T1']);

$buscador = get_busqueda($busqueda);



 
// Resultado, número de registros y contenido.



include "../view/buscador.html";
	

?>