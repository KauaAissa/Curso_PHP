<?php

$frase = "testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseB = "Carro, avião, barco, navio";

$fraseB = explode(",", $fraseB);

print_r($fraseArray);
echo "<br>";

for($i = 0; $i < count($fraseArray); $i++) {

    echo "$fraseArray[$i] <br>";

}