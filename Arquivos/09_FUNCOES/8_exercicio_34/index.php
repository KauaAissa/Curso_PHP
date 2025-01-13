<?php

function verificar($numero) {
    if($numero % 2 == 0) {
        echo "Seu numero é par <br>";
    }
    else if($numero % 2 != 0) {
        echo "Seu numero é impar <br>";
    }
    else {
        echo "Insira um valor valido";
    }
}

verificar(2);
verificar(3);

?>