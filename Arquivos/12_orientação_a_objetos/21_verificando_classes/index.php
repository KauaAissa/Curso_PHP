<?php

class humano {
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}

    public function andar(){}
}

if(class_exists("Humano")) {
    echo "A classe existe <br>";
}

if(class_exists("cachorro")) {
    echo "A classe existe <br>";
}
else {
    "A classe não existe <br>";
}

print_r(get_class_vars("Humano"));

print_r(get_class_methods("Huamno"));

