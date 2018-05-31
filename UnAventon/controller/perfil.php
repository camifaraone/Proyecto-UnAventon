<?php


require_once ("../model/perfil.php");
require_once ("../model/datosvehiculo.php");
if(isset($_GET["idautoincremental"]) ){  //si el Email esta seteado por GET (en el buscador) , entonces llama a una funcion ubicada en "../model/perfil.php" y guarda el resultado en la variable $usuario

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);


$vehiculo = get_vehiculo($id);







include "../view/micuenta.html";
	

?>