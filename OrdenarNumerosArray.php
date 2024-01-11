<?php
//Ordenar array
$array = array(10,21,39,22,70,65,7,12,4,1);
for ($i=0; $i < 9 ;$i++) { 
    if($array[$i] > $array[$i+1]) {
        $aux = $array[$i];
        $array[$i] = $array[$i+1];
        $array[$i+1] = $aux; 
        $i=-1;
    }
}
foreach($array as $v1)echo $v1,'<br>';
?>