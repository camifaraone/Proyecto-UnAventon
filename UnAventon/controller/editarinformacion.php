<?php


require_once ("../model/perfil.php");
if(isset($_GET["idautoincremental"]) ){  

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);



include "../view/editarinformacion.html";
	

?>