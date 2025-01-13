<?php

$carro = ['cor' => 'Branco', 'portas' => '4', 'testoSolar' => true];

print_r($carro);
echo "<br>";
echo $carro['cor'];
echo "<br>";
echo "<br>";

$portas = $carro['portas'];

echo "O carro tem $portas portas";

?>