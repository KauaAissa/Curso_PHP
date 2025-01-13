<?php

class Pessoa {

    function falar() {
        echo "Bom dia";
    }
}

$matheus = new Pessoa();

$matheus->nome = "Matheus";

echo $matheus->nome;

echo "<br>";

$matheus->falar();

?>