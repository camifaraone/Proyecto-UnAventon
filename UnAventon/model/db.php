<?php
/* Conectar a una base de datos ODBC invocando al controlador */
$conn = 'mysql:dbname=unaventonproyecto;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $conn = new PDO($conn, $usuario, $contraseña);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>










