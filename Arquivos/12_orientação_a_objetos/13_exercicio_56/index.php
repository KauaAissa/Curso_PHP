<?php

class Humano {

    $braco = 2;
    $perna = 2;
    $nariz = 1;

    public function falar() {
        echo "Olá mundo";
    }

}

class Professor extends Humano {

    public $disciplina = "Portugues";

    public function lecionar() {
        echo "O professor está dando aula de $this->disciplina <br>";
    }

}

$marcos = new Humano;

echo $marcos->nariz . "<br>";
$marcos->falar() . "<br>";

$joao = new Professor;

echo $joao->pernas . "<br>";
echo "$joao->disciplina <br>";

$joao->falar() . "<br>";

$joao->lecionar() . "<br>";