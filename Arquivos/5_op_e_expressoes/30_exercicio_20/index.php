<?php

$a = 0;
$a += 5;

$b = 2;
$b *= 2;

echo $a . "<br>" . $b . "<br>";

if($a <= $b) {
    echo "A é menor que B";
}

if($b <= $a) {
    echo "B é menor que A <br>";
}

echo $a <= $b ? "A é menor que B" : "B é menor que A";



?>