<?php

$raca = "bulldog";
$cor = "preto";
$deficiencia = false;
$consultas = 4;

$cachorro = compact("raca", "cor", "deficiencia", "consultas");

print_r($cachorro);
echo "<br>";

foreach($cachorro as $detalhes => $value) {
    echo "$detalhes: $value <br>";
}