<?php

include_once "backend.php";

?>

<h1><?= $nome; ?> Seja bem vindo ao nosso site</h1>

<h2>confira nosso principais produtos</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?></li>
        <?php endforeach; ?>
</ul>