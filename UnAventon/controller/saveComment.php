<?php
 // Sistema comentarios mas panel de administracion:
 // Php mysql comentarios,
 // Copyright 2015 bloguero-ec.
 // Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
 
define("INCLUDE_CHECK",1);

include'../model/funciones.php';

if(empty($_POST['comment'])) die("0");
// si no hay comentarios salimos


$comment = nl2br(limpiar($_POST['comment']));
$user='usuario';
// por defecto el usuario es Usuario con el nombre del png saldrá la imagen correspondiente
// podrá utilizar entre la carpeta avatar:	bloguero.png rockero.png usuario.png
// con un inicio de sesion fuera diferente saldría la imagne del usuario que haya iniciado sesion

$addon='';
if($_POST['parent']) $addon=',parent='.(int)$_POST['parent'];

mysqli_query("INSERT INTO comentarios SET nombre='".$user."', comentarios='".$comment."' , dia='".date('d')."' , mes='".date('m')."', anio='".date('Y')."' , idautoincremental='".$_SERVER['REMOTE_ADDR']."' , publicado='Publicado' , fecha='".date('Y-m-d')."'  " .$addon);

if(mysql_affected_rows($link)==1)
	echo mysql_insert_id($link);
	// Si la insersion es sastifactoria pues el ID se asigna automaticamente al que le corresponde
else
	echo '0';
?>