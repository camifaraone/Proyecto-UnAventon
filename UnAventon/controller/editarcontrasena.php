<?php


require_once ("../model/perfil.php");
require_once ("../model/editarcontrasena.php");
if(isset($_GET["idautoincremental"]) ){  

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);


if(isset($_POST["editar"])){

if(!empty($_POST['contrasenia']) && !empty($_POST['confirmarcontrasenia'])){
	if($_POST['contrasenia']== $_POST['confirmarcontrasenia']) {
    
    $contrasenia= $_POST['contrasenia']; //por formulario
    $confirmarcontrasenia=$_POST['confirmarcontrasenia'];

    
    
    
    $editarcontrasenia = editar_contrasenia($contrasenia,$confirmarcontrasenia,$id);
    var_dump($editarcontrasenia);
    header("Location: ../controller/perfil.php?idautoincremental=".$id);


}} else {
     $message = "Todos los campos deben estar completos";
}
}
include "../view/editarcontrasena.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?> 
