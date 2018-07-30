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


function pago($tipo, $numtarjeta, $mes, $anio, $nomape,$codseguridad,$documento,$idviaje,$id){
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO tarjeta
		(tipo, numtarjeta, mes, anio, nomape, codseguridad, documento, idviaje, idautoincremental) 
		VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)" );			
		$sql ->execute(array($tipo, $numtarjeta, $mes, $anio, $nomape,$codseguridad,$documento,$idviaje,$id));
    }catch(PDOException $e) {
		return 'Error: ' . $e->getMessage();			
    }
	return true;
 }



function estadopago($id){

		require ("db.php");



		try{

		$gsent = $conn->prepare("UPDATE viaje SET estadopago=? WHERE idviaje=? ");

				
		$gsent->execute(array(1, $id));




		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}





 ?>