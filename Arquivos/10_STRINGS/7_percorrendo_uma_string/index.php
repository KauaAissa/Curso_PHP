<?php

$str = "Está é uma string muito grande, ela tem varios caracteres";

for($i = 0; $i < strlen($str); $i++) {
    echo "$str[$i] <br>";
}