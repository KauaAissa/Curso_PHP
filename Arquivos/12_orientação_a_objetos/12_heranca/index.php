<?php

class Humano {

    public $idade = 29;

    public function falar() {
        echo "Olá mundo! <br>";
    }

    private function gritar() {
        echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalala <br>";
    }

    public function acessaFalarBaixinho(){
        $this->falarBaixinho();
    }
    
}

class Programador extends Humano {

    public function acessaFalarBaixinhoProgramador(){
        $this->falarBaixinho();
    }

}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessaFalarBaixinho();

$matheus = new Programador;

echo $matheus->idade . "<br>";

$matheus->falar();
$matheus->acessarGritar();
$matheus->acessaFalarBaixinhoProgramador();