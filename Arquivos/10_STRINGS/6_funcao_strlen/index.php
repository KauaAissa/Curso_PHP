<?php

$str1 = "Está string é muito grande";
$str2 = "está não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2) {
    echo "A string 1 é maior";
}
else {
    echo "a string 2 é maior";
}