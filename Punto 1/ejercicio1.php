<?php
$a = array(1,4,5,8);
$b = array(4,5,9,10);
$n = 4;

$c = array(4,6,7,10,2);
$m = 5;



echo("Se puede clavar con los primeros " . solution($a,$b,$n,$c,$m) . " clavos.");

function solution($A,$B,$N,$C,$M) {
  
    
    for( $x=0; $x < $M; $x++)
    {
        for( $tablon=0 ; $tablon<$N ; $tablon++)
        {
            $hit = 0;
            
            for( $j=0; $j< $x+1 ; $j++)
            {
                if ($C[$j] < $A[$tablon] || $C[$j] > $B[$tablon])
                {
                    $hit = 0;
                }
                else
                {
                    $hit = 1;
                    break;
                };
            };
             if ($hit != 1)
             {
                 $ret = -1;
                 break;
             }
             else
                 $ret = $x+1;
        };               
        if ($ret != -1)
            return $ret;
    };  
    return -1;
  
    
  }



?>