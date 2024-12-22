<?php

$x = 4;

while($x < 30) {
    echo "Variavel X é $x <br>";

    

    if($x === 24) {
        echo "Fim do loop";
        break;
    }

    $x = $x + 2;

}

?>