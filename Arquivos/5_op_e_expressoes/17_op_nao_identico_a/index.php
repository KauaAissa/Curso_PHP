<?php

$a = 1;
$b = "1";

if($a != $b) {
    echo "A é diferente de B 1";
}

if($a !== $b) {
    echo "A é diferente de B 2 <br>";
}

if(1 !== 2) {
    echo "não é identico 1 <br>";
}

if(1 !== "1") {
    echo "não é identico 2 <br>";
}

if([] !== "abc") {
    echo "não é identico 3 <br>";
}


?>