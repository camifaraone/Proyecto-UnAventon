<?php


require_once ("../model/buscador.php");


$id= ($_GET["idautoincremental"]);


$busqueda = trim($_POST['buscador']);
//var_dump($busqueda);
//var_dump($_POST);



 
// Resultado, número de registros y contenido.



include "../view/buscador.html";
	

?>