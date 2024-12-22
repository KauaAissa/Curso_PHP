<?php

$pessoas = [
    "joao" => 12,
    "maria" => 19,
    "enzo" => 30,
    "julia" => 2
];

arsort($pessoas);

?>

<h1>Lista de pontos</h1>
<ol>
<?php foreach($pessoas as $nomes => $pontuacao): ?>

<li> <?= $nomes ?> -> <?= $pontuacao ?> pontos</li>

<?php endforeach; ?>
</ol>
