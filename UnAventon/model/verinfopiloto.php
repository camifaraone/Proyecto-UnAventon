<?php
  	function get_datos($idviaje){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from viaje INNER JOIN usuario ON usuario.idautoincremental = viaje.idautoincremental where idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetch();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
?>