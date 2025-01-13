<?php

$a = 10;

while($a > 0) {

    if($a == 5 || $a == 7) {
        echo "Pulou a execução $a <br>";

        $a--;

        continue;
    }

    if($a == 2) {

        echo "Terminado o loop com break $a <br>";
        break;
    }

    echo "Executando o loop $a <br>";
    $a--;
}

?>