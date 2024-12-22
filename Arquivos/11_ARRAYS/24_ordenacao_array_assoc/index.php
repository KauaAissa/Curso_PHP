<?php

$arr = [
    'matheus' => 23,
    'julia' => 12,
    'joao' => 98,
    'kaua' => 999
];

asort($arr);

print_r($arr);
echo "<br>";



$arr2 = [
    'matheus' => 23,
    'julia' => 12,
    'joao' => 98,
    'kaua' => 999
];

arsort($arr2);

print_r($arr2);
echo "<br>";

ksort($arr3);

print_r($arr3);
echo "<br>";

krsort($arr4);

print_r($arr4);
echo "<br>";