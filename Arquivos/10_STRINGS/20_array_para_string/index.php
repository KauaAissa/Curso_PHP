<?php

$arr = ["Maçã", "pera", "Mamão", "Batata"];

$str = implode(", ", $arr);

echo $str "<br>";

$arr2 = ["Avião", "Tanque", "jipe", "Metralhadora"];

$str2 = implode(" <-> ", $arr2);

echo "$str2 <br>";