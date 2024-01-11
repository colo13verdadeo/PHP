<?php
$array = array('hola','chau','.l.','.l.','facil','dificil');
$arrayborrado = [];
// Encontrar strings duplicados en el array.
for ($i=0; $i < count($array) ;$i++) { 
    $index = 0;
    foreach ($array as $v1) {if ($v1 == $array[$i] && $index!=$i){
        array_push($arrayborrado,$v1);
    } 
    $index++;
}
}
$array = array_diff($array,$arrayborrado);
foreach($array as $v1)echo $v1,'<br>';
?>