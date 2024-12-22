<?php

$matheus = [
    'nome' => 'matheus',
    'idade' => 29,
    'profissão' => 'programador'
];

$alexia = [
    'nome' => 'alexia',
    'idade' => 25,
    'profissão' => 'eng civil'
];


foreach($matheus as $caracteristicas => $value) [
    echo "$caracteristicas => $value <br>";
]

foreach($alexia as $value) {
    echo "$value <br>";
}

