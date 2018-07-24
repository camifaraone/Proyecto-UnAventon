<?php
	$date = date("Y");
// Función que obtiene el nombre de un mes
   function nombreMes ($mes)
   {
      $meses = array ("enero", "febrero", "marzo", "abril", "mayo",
                      "junio", "julio", "agosto", "septiembre",
                      "octubre", "noviembre", "diciembre");
      $i=0;
      $enc=false;
      while ($i<12 and !$enc)
      {
         if ($i == $mes-1)
            $enc = true;
         else
            $i++;
      }
      return ($meses[$i]);
   }
   
   $dia  = date ("j");
   $mes  = date ("n");
   $anyo = date ("Y");

?>