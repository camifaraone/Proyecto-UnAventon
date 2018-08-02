<?php 
  function get_preguntas($idviaje){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from pregunta INNER JOIN usuario ON pregunta.idautoincremental = usuario.idautoincremental where  pregunta.idviaje=?");
	
		$sql ->execute(array("$idviaje"));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
 
 function get_mi_idviaje($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idviaje from pregunta where idduenio=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 ?>