<?php

$a = "5";
$b = 12;

$c = $a * $b;

echo $c . "<br>";
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(true);
echo "<br>";
echo gettype("olá");
echo "<br>";

?>