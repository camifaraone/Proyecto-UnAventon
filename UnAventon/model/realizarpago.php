<?php
function get_idviaje($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("SELECT idviaje FROM viaje INNER JOIN usuario ON viaje.idautoincremental = usuario.idautoincremental WHERE usuario.idautoincremental=:id");
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
 
 
  function get_viaje($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from viaje INNER JOIN origen ON  viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino where idautoincremental=:id && estadopago=0");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;	 
 }
 
 function get_viajes($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from viaje where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
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