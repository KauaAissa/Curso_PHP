<?php

abstract class Teste {
    public static function testandoClasse() {
        echo "Este é uma classe abstrata <br>";
    }

    abstract public function testeAbs();
}

// $t = new teste;

Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbs() {
        echo "Teste metodo abstrato <br>";
    }

}

$n = new Nova;
$n->testeAbs();