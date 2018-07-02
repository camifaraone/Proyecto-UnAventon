<?php

require_once "../model/eliminarcuenta.php";

$id = ($_GET['idautoincremental']);

$a = eliminar_cuenta ($id);
session_destroy;
// ALERTA QUE DIGA QUE SE ELIMINO CORRECTAMENTE EL USUARIO 

 header("Location: ../controller/register.php");







?>