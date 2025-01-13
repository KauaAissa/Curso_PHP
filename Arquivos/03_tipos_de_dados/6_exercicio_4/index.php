<?php

echo 123.12;
echo "<br>";
echo 12.12;
echo "<br>";

$a = -12.34;

echo $a;
echo "<br>";

if(is_float($a)) {
    echo "Isso é um float negativo";
}

if(is_int($a)) {
    echo "Isso é um float negativo";
}

?>