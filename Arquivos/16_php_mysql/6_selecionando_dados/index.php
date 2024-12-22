<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Assunto da aula
$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// Um resultado
$item = $result->fetch_assoc();

// Todos os resultados
$itens = $result->fetch_all();

print_r($itens);