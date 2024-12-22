<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli("localhost", "root", "", "cursophp");

if ($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error();
    echo "Erro: " . $conn->connect_error;
}
