<?php

$pessoa = ['nome' => 'Kaua', 'idade' => '19', 'profissao' => 'Estudande'];

print_r($pessoa);
echo "<br>";

if($pessoa['idade'] >= 18) {
    echo "a pessoa é maior de 18";
}

echo "<br>";

$idade = $pessoa['idade'];

if($idade >= 18) {
    echo "Maior de 18 anos";
}




?>