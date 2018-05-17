<?php
	 
	
  
  function get_viajes(){
	require_once ("db.php");
	try{
		$sql = $conn->prepare("select * from viaje");
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
?>