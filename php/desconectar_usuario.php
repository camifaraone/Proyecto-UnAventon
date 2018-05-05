<?php 
session_start();
include('usuario.php');
$user= new usuario; //instancia de una clase
$user->desconectar();

?>

