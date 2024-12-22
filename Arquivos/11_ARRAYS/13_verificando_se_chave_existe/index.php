<?php

$arr = ['nome' => 'Matheus', 'idade' => '29'];

if(array_key_exists("nome", $arr)) {

    echo "A chave existe <br>";

}
else {
    echo "A chave não existe";
}


if(array_key_exists("profissão", $arr)) {

    echo "A chave existe <br>";

}
else {
    echo "A chave não existe";
}


if(isset($arr['nome'])) {

    echo "A chave existe ISSET";

}
else {
    echo "a chave não existe ISSET";
}

if(isset($arr['teste'])) {

    echo "A chave existe ISSET";

}
else {
    echo "a chave não existe ISSET";
}


$x = 10;

if(isset($x)) {

    echo "A VAR existe ISSET";

}
else {
    echo "a VAR não existe ISSET";
}