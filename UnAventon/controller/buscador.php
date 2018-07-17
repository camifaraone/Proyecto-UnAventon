<?php


require_once ("../model/buscador.php");


$id= ($_GET["idautoincremental"]);


$busqueda = trim($_POST['buscador']);
var_dump($busqueda);
var_dump($_POST);






include "../view/buscador.html";
	

?>