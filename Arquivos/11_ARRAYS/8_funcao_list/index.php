<?php

$pessoa ["Matheus", 29, "Programador", "Verde"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $olhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$olhos <br>";