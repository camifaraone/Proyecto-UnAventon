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
    echo "<html><script> alert('Contraseña cambiada!');</script></html>"; 
echo "<html><script> document.location.href='../controller/perfil.php?idautoincremental=".$id."';</script></html>";  
 
    //header("Location: ../controller/perfil.php?idautoincremental=".$id);


}} else {
     echo "<html><script> alert('Las contraseñas no coinciden!');</script></html>"; 
echo "<html><script> document.location.href='../controller/editarcontrasena.php?idautoincremental=".$id."';</script></html>";  
}
}
include "../view/editarcontrasena.html";
?> 
