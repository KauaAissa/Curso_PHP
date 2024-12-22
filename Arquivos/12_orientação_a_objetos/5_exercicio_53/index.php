<?php

class Cachorro {

    function latir() {
        echo "Au au";
    }

    function andar($p) {
    echo "O cachorro deu $p passos";
    }

}

$viraLata = new Cachorro;
$pastorAlemao = new Cachorro;

$viralata->latir();

$pastorAlemao->andar(4);