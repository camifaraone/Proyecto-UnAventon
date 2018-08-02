<?php

error_reporting(E_ALL ^ E_NOTICE); //no muestra el error
require_once ("../model/buscador.php");


$id= ($_GET["idautoincremental"]);
$idviaje = ($_GET["idviaje"]);

$busqueda = ($_POST['T1']);

$buscador = get_busqueda($busqueda);



 
// Resultado, número de registros y contenido.



include "../view/buscador.html";
	

?>