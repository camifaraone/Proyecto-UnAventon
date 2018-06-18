<?php
if(!session_id()){
	session_start();
}
require_once ("../model/perfil.php");
require_once "../model/verviaje.php";

if(isset($_GET["idautoincremental"]) ){
	$usuario= get_perfil($_GET["idautoincremental"]);
}
$id= ($_GET["idautoincremental"]);

if(isset($_GET["idviaje"]) ){
	$viaje= get_unviaje($_GET["idviaje"]);
}

include '../view/postularse.html';

?>