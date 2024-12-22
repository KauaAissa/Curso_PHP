<?php

if(5 > 2) {
    echo "entrou no if <br>";
} else {
    echo "entrou no else <br>";
}

if("teste" === 5) {
    echo "entrou no if 2 <br>";
} else {
    echo "entrou no else 2 <br>";
}


// variaveis

$a = 10;
$b = 20;

if($a > $b) {
    echo "entrou no if 3 <br>";
} else {
    echo "entrou no else 3 <br>";
}

$msg = "teste";

if($a > $b) {
    echo "entrou no if 3 <br>";
} else {
    echo $msg;
}

?>