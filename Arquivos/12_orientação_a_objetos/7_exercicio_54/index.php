<?php

class Pessoa {

    public $nome;
    public $idade;

    function andar($p) {

        echo "Andou $p passos <br>";

    }

}

$matheus = new Pessoa;

$matheus->nome = "matheus";
$matheus->idade = 20;

echo "O nome dele é $matheus->nome e tem $matheus->idade anos <br>";


echo $matheus->andar(20);

echo $matheus->nome . $matheus->andar(10);