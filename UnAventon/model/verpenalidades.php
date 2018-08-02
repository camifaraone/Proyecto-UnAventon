<?php

function get_comentariopiloto($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from calificacionpiloto where idautoincremental=? and idacompaniante=?");

		$sql ->execute(array($id,-1));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
function get_comentarioacomp($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from calificacionacompaniante where idautoincremental=? and idpiloto=?");

		$sql ->execute(array($id,-1));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }

 
?>