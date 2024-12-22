<?php

$a = 52;
$b = 25.5;
$d = "teste";
$taxa = 2;

if(is_int($a) || is_float($a)) {
    echo "é numero <br>";
    $c = $a * $taxa;

    if($c > 100) {
        echo "O numero final é maior que 100 <br>";
    } else {
        echo "O numero não é maior que 100 <br>";
    }
} else {
    echo "Não é numero <br>";
}


if(is_int($b) || is_float($b)) {
    echo "é numero <br>";
    $c = $b * $taxa;

    if($c > 100) {
        echo "O numero final é maior que 100 <br>";
    } else {
        echo "O numero não é maior que 100 <br>";
    }
} else {
    echo "Não é numero <br>";
}



if(is_int($d) || is_float($d)) {
    echo "é numero <br>";
    $c = $d * $taxa;

    if($c > 100) {
        echo "O numero final é maior que 100 <br>";
    } else {
        echo "O numero não é maior que 100 <br>";
    }
} else {
    echo "Não é numero <br>";
}

?>