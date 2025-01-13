<?php

if(5 > 10 && 10 > 5) {
    echo "Entrou no if 1 <br>";
}

if(50 > 10 && 10 > 5) {
    echo "Entrou no if 1 <br>";
}

if(50 > 10 && 10 > 500) {
    echo "Entrou no if 1 <br>";
}

if(50 > 100 && 10 > 500) {
    echo "Entrou no if 1 <br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d) {
    echo "entrou no if 5";
}

if($b <= $a && $c >= $d) {
    echo "entrou no if 6";
}

if($b === $a && $c > $d) {
    echo "entrou no if 7";
}

if(($b <= $a && $c >= $d) && $a > $b) {
    echo "entrou no if 8";
}

if($b < $a && $c >= $d && $c === $a) {
    echo "entrou no if 9";
}

?>