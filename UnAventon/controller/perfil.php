<?php


require_once ("../model/perfil.php");
if(isset($_GET["email"]) ){

$usuario= get_perfil($_GET["email"]);

}



include "../view/micuenta.html";
	

?>