<?php

$velocidade = 30;
$velocidade1 = 40;
$velocidade2 = 60;


if($velocidade2 < 40) {
    echo "Velocidade correta <br>";
} 
else if($velocidade2 == 40) {
    echo "Velocidade permitida atingida CUIDADO <br>";
}
else {
    echo "Você está acima da velocidade <br>";
}

?>