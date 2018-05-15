<?php
/* Conectar a una base de datos ODBC invocando al controlador */
$dsn = 'mysql:dbname=unaventonproyecto;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $conn = new PDO($dsn, $nombreusuario, $contrasenia);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>