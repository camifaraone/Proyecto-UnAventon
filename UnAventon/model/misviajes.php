<?php
  	function geteliminar($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select calificacion from usuario where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetch();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
	
  function get_estadopostulacion($idviaje){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from estadopostulacion where idviaje=:idviaje");
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
 
 function get_idviaje($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select idviaje from viaje INNER JOIN usuario ON viaje.idautoincremental = usuario.idautoincremental where usuario.idautoincremental=:id");
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
		
		$sql = $conn->prepare("select * from viaje INNER JOIN origen ON  viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino where idautoincremental=:id");
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
 
 
 
 
 
 function get_viajespost($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from estadopostulacion INNER JOIN viaje ON estadopostulacion.idviaje = viaje.idviaje INNER JOIN origen ON viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino  where estadopostulacion.idautoincremental=:id");
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


function pregresp($id) {
	 require "../model/db.php";//te crea una conexion
	try{

		$sql = $conn->prepare("select * from pregunta left join respuesta on pregunta.idpregunta=respuesta.idpregunta where pregunta.idviaje=id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();


$comentario =  mysqli_query($result) or die(mysqli_error());
	while($rowComen = mysqli_fetch_array($result))
{
?>          <p class="box" type="box">
			<li>hola</li>
			<span class="Estilo24">
			<? echo $rowComen["idautoincremental"]. "Preguntó:";?>
			</span>
            <span class="Estilo3">
            <? echo $rowComen["pregunta"];?>
            </span></p>
            <p class="cuadro7">
            <span class="Estilo24">
            <? echo " Respondió: ";?>
            </span>
            <?php echo $rowComen["respuesta"];?>
            <span class="Estilo3">
            </span></p>
            
              <?php
} 



   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }

?>
