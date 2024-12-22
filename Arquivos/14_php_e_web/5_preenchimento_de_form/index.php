<?php


$usuario = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissao' => 'programador'
];

if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
<div>
    <input type="text" name="nome" placeholder="digite seu nome" value="<?= $nome ?>">
</div>
<div>
    <input type="text" name="idade" placeholder="digite sua idade" value="<?= $idade ?>">
</div>
<div>
    <input type="text" name="profissao" placeholder="digite sua profissao" value="<?= $profissao ?>">
</div>
<div>
    <input type="submit" value="Enviar">
</div>
</form>
    
</body>
</html>