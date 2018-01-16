<?php
$a='hola, que buena ola Laomir';
$b='OAL';


function Solution($cadena1, $cadena2)
{
    $contador = 0;
    $sinComa= str_replace(',','',$cadena1);
    $anagramas= GenerarAnagrama(str_split($cadena2,1));
    
    $listaCadena1 = explode(" ", $sinComa);
    
    foreach ($listaCadena1 as $Cadena1)
    {
      foreach ($anagramas as $anagrama)
      {
        if(preg_match("/".$anagrama."/i", $Cadena1))
        {
          $contador += 1;
        }
      }
    }
    return $contador;
}
echo("Existen ".Solution($a,$b). " coincidencias");
 

function GenerarAnagrama($palabra)
{
$miarray = array();
$cadena="";
//copio el array
$temporal=$palabra;
//borro el primer numero del array
 
 
array_shift($palabra);
//ahora la cuenta esta en que solo quedan 3
for($u=0;$u<count($temporal);$u++)
{
 
  for($i=0;$i<count($palabra);$i++)
  {
    array_push($palabra,$palabra[0]);
    array_shift($palabra);
     
      for($e=0;$e<count($palabra);$e++)
      {
      	$cadena.=$palabra[$e];
      }
       
      array_push($miarray,$temporal[$u].strrev($cadena));
      $cadena="";
       
    }
    array_shift($palabra);
    array_push($palabra,$temporal[$u]);
     
  }
  return $miarray;
}

?>