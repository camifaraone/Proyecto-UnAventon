<?php
//Proceso de conexión con la base de datos
function conectar(){
	/* para que funcione local*/
	$user="root";
	$pass="";
	$server="localhost";
	$db="unaventonproyecto";
	$conex= mysqli_connect($server,$user,$pass)
		or die("No se pudo realizar la conexion");
	mysql_select_db($db, $conex);
	return $conex;
}
?>
	