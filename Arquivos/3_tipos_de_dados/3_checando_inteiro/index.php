<?php

if(is_int(5)) {
    echo "é um inteiro <br>"; 
}

if(is_int("não é um inteiro")) {
    echo "é um inteiro";
}

$a = 10;

if(is_int($a)) {
    echo "é um inteiro 2";
}

?>