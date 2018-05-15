
<?php
//AL PRINCIPIO COMPRUEBO SI HICIERON CLICK EN ALGUNA PÁGINA 
    if(isset($_GET['page']))
    {
        $page= $_GET['page'];
    }
    else
    {
        //SI NO DIGO Q ES LA PRIMERA PÁGINA
        $page=1;
    }
      
    //MIRO CUANTOS DATOS FUERON DEVUELTOS
    $numproductos=mysqli_num_rows($result);
      
    //ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA , EN EL EJEMPLO PONGO 15
    $prodporpag= 10;
      
    //CALCULO LA ULTIMA PÁGINA
    $ultpag= ceil($numproductos / $prodporpag);
      
    //COMPRUEBO QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
    $page=(int)$page;
     
    if($page > $ultpag)
    {
        $page= $ultpag;
    }
     
    if($page < 1)
    {
        $page=1;
    }
      
    //CREO LA SENTENCIA LIMIT PARA AÑADIR A LA CONSULTA QUE DEFINITIVA
    $limit= 'LIMIT '. ($page -1) * $prodporpag . ',' .$prodporpag;
      
    //REALIZO LA CONSULTA QUE VA A MOSTRAR LOS DATOS (ES LA ANTERIO + EL $limit)
    $query .=" $limit";
    $result=mysqli_query($conex,$query);
?> 
