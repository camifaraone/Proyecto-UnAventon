<?php


require_once ("../model/perfil.php");
require_once ("../model/editarcontrasena.php");
if(isset($_GET["idautoincremental"]) ){  

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);


if(isset($_POST["editar"])){

if(!empty($_POST['contrasenia']) == '' && !empty($_POST['nuevacontrasenia']) == '' && !empty($_POST['confirmarcontrasenia']) == ''){

    $contrasenia= $_POST['contrasenia']; //por formulario
    $nuevacontrasenia= $_POST['nuevacontrasenia'];
    $confirmarcontrasenia=$_POST['confirmarcontrasenia'];

    
    
    
    $editar = editar_contrasenia($contrasenia,$nuevacontrasenia,$confirmarcontrasenia,$id);
    var_dump($editar);
    header("Location: ../controller/perfil.php?idautoincremental=".$id);


} else {
     $message = "Todos los campos deben estar completos";
}
}
include "../view/editarcontrasena.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?> 
