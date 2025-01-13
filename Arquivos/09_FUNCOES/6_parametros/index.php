<?php

function velocidadeMaxima($vel) {
if(is_int($vel)) {
    echo "O carro atinge a velocidade de $vel km/h <br>";
} 
else {
    echo "Passe um numero <br>";
}
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

// Não pode
// velocidadeMaxima();

echo "Teste continuando <br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

// php ignora o parametro desnecessario
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");


// mais functions

function animal($nome, $raca) {
    echo "O $nome é da raça $raca";
}

animal("bob", "Vira lata");