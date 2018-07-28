<?php

require_once "../model/eliminarcuenta.php";

$id = ($_GET['idautoincremental']);

$a = eliminar_cuenta ($id);

// ALERTA QUE DIGA QUE SE ELIMINO CORRECTAMENTE EL USUARIO 
echo "<html><script> alert('Nos vemos pronto!');</script></html>"; 
echo "<html><script> document.location.href='../controller/register.php';</script></html>"; 
 
session_destroy;


			
			




?>