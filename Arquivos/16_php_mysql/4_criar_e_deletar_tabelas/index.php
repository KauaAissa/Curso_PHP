<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Assunto da aula
// $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);
$conn->close();
