<?php

$arr = [
    'ronaldo' => 20,
    'maria' => 17,
    'joão' => 19,
    'roberto' => 40
];

?>

<table border="1">
<tr>
    <th>Nome</th>
    <th>idade</th>
</tr>

    <?php foreach($arr as $nome => $idade): ?>

        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>

    <?php endforeach; ?>

</table>