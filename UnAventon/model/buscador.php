
<?php 


function get_busqueda($busqueda) {
	 require ("db.php"); 
	try{
		$sql = $conn->prepare("select * from viaje INNER JOIN origen ON viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino where viaje.fecha LIKE "%$busqueda%" OR viaje.monto LIKE "%$busqueda%" OR viaje.duracion LIKE "%$busqueda%" OR viaje.hssalida LIKE "%$busqueda%" OR destino.ciudadDestino LIKE "%$busqueda%" OR origen.ciudadOrigen LIKE "%$busqueda%" OR viaje.cantasientos LIKE "%$busqueda%" OR viaje.observaciones LIKE "%$busqueda%" "); 
		   
		$sql ->execute(array($busqueda));
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 } 
	
	
	
	
	
























/*
$conn = 'mysql:dbname=unaventonproyecto;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $conn = new PDO($conn, $usuario, $contraseña);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';


  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  // Si hay información para buscar, abrimos la conexión
	  $conn = 'mysql:dbname=unaventonproyecto;host=127.0.0.1';
      mysql_set_charset('utf8');  // mostramos la información en utf-8
	  
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM viaje WHERE observaciones LIKE '%" .$busqueda. "%'";
	  
	  $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (mysql_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>';

	     // Se almacenan las cadenas de resultado
		 while($fila = mysql_fetch_assoc($resultado)){ 
              $texto .= $fila['viaje'] . '<br />';
			 }
	  echo $registros;
echo $texto; 
	  }else{
			   $texto = "NO HAY RESULTADOS EN LA BBDD";	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	 // mysql_close($conexion);
  }

?>
<?php 
// Resultado, número de registros y contenido.
echo $registros;
echo $texto; 

*/



?>
