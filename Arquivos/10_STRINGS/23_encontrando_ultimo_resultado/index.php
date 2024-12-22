<?php

$str = "Testando encontro da palavra teste, em uma string que tem teste";

$palavra =  strrpos($str, "teste");

echo "$palavra <br>";

$palavra2 = strrpos($str, "teste");

echo "$palavra2 <br>";

if(strrpos($str, "Java") === false) {
    echo "A apalavra java não foi encontrada";
}

$p = substr($str, strpos($str, "teste"). 5);

echo "$p <br>";