<?php

for($i = 0; $i <= 3; $i++) {
    array_push($arr, $i);

}

// print_r($arr);

function arrayMaiorQueSete($array) {

    for($j = 0; < count($array); $j++) {

        if($array[$j] > 7) {

            array_push($arrayRetorno, $array[$j]);

        }

    }

    return $arrayRetorno;

}

$novoArray = arrayMaiorQueSete($arr);

print