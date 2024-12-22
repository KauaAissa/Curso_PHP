<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Assunto da aula
$nome = "Suporte de microfone";
$descicao = "O suporte é novo e foi fabricado na china";

$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $some, $descricao); // s - string, i - inteiro, d - double(float)

$stmt->execute();