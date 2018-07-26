
<?php 


function get_busqueda($busqueda) {
	 require ("db.php"); 
	try{
		$sql = $conn->prepare("select * from viaje INNER JOIN origen ON viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino where  viaje.fecha LIKE :busqueda OR viaje.monto LIKE :busqueda OR viaje.duracion LIKE :busqueda OR viaje.hssalida LIKE :busqueda OR destino.ciudadDestino LIKE :busqueda OR origen.ciudadOrigen LIKE :busqueda OR viaje.cantasientos LIKE :busqueda OR viaje.observaciones LIKE :busqueda "); 
		   
		$sql->bindParam(":busqueda",$busqueda,PDO::PARAM_STR);
		$sql -> execute();

	$result= $sql->fetchAll(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 } 
	
	
	
	
	