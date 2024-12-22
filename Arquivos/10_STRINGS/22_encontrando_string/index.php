<?php

$str = "Estamos testando o metodo strpos, com o strpos podemos encontar strings";

$testeEncontar = strpos($str, "strpos");

echo "$testeEncontar <br>";

$testeEncontar2 = strpos($str, "Java");

echo "$testeEncontar2 <br>";

if($testeEncontar2 === false) {
    echo "Palavra não encontrada <br>";
}

$palavra = "com";

$testeEncontar3 = strpos($str, "$palavra");

echo "$testeEncontar3 <br>";

$palavra2 = "to";

$testeEncontar4 = strpos($str, $palavra2);

echo "$testeEncontar4 <br>";