<?php

$frase = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "Testando o case de uma palavra <br>";

// primeira letra maiuscula
echo ucfirst($frase);
echo ucfirst($frase2);

// todas as iniciais maiusculas
echo ucwords($frase3);
echo ucwords($frase2);

