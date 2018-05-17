<?php 
session_start();
unset($_SESSION['session_username']);
session_destroy();
header ("Location: ../controller/index.php");
?>