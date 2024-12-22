<?php

$j = 0;
$teste = "Matheus";

do {

    echo "Testando do while $j <br>";

    if($j == 2) {
        echo $teste . "<br>";
    }

    $j++;

} while($j < 10);


$i = 10;

do {

    echo "Testando do while $i <br>";

    $i--;

} while($i > 0);

?>