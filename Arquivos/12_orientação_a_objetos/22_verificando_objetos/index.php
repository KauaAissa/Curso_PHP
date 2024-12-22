<?php

class humano {

    public function falar() {
        echo "Olá";
    }

}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)) {
    echo "É um objeto <br>";
}
else {
    echo "Não é um objeto <br>";
}

if(is_object($teste)) {
    echo "É um objeto <br>";
}
else {
    echo "Não é um objeto <br>";
}

echo get_class($matheus) . "<br>";

if(method_exists($matheus, "falar")) {
    echo "O metodo existe <br>";
}
else {
    echo "O metodo não existe <br>";
}

if(method_exists($matheus, "fsdf")) {
    echo "O metodo existe <br>";
}
else {
    echo "O metodo não existe <br>";
}