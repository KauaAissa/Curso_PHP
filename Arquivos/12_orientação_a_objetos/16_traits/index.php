<?php

trait Objeto {

    public function teste() {
        echo "Testando trait de um objeto <br>";
    }
}

trait Testando {

    public $y = 10;

    public function traitTeste() {
        echo "Este metodo é da trait testando <br>";
    }

}

class Central {

    use Objetos;
    use Testando;
}

$x = new Central;

$x->teste();
$x->traitTeste();

echo $x->$y . "<br>";