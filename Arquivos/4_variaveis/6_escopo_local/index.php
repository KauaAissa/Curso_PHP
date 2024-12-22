<?php

$x = 10;

echo "$x global <br>";

function teste() {
    $x = 5;

    echo "$x local <br>";
}

teste();


echo "$x global <br>";

teste();


function() {
    $x = 12;

    
echo "$x local 2 <br>";
}

teste();

$x = 99; 
echo "$x global <br>";

testando();

?>
