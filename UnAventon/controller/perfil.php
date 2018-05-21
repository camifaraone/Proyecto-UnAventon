<?php


require_once ("../model/perfil.php");
if(isset($_GET["idautoincremental"]) ){  //si el Email esta seteado por GET (en el buscador) , entonces llama a una funcion ubicada en "../model/perfil.php" y guarda el resultado en la variable $usuario

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);



include "../view/micuenta.html";
	

?>