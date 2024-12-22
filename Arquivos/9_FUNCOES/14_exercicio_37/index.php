<?php

function defineCorCarro($cor = "vermelha") {

    return "A cor do carro é: $cor";

}

$carroVermleho = defineCorCarro();
echo $carroVermleho . "<br>";

$carroAzul = defineCorCarro("Azul");

echo $carroAzul . "<br>";