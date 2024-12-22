<?php

class Carro {
    public $cor;
    public $tetoSolar;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel) {

        $this->velocidadeMaxima = $vel;

    }

    function getVelocidadeMaxima() {

        echo "A velocidade maxima do carro é: $this->velocidadeMaxima km/h";

    }

}

$bmw = new Carro;

$bmw->cor = "Branco";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();