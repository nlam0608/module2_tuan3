<?php

$array = array(1,2,3,4,5,6,7,8,2,4,6,3,1,6);
//$value = 2;
function countNumber($numbers,$value){
    $count = 0;
    for ($i = 0; $i< count($numbers);$i++){
        if ($numbers[$i]==$value){
            $count++;
        }
    }
    return $count;
}

echo countNumber($array,"6");