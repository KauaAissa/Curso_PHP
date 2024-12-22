<?php

$frase = "O rato roeu a roupa do rei de Roma";
$a = 0;

for($i = 0; $i < strlen($frase); $i++) {


    if($frase[$i] == "a"){
        $a = $a + 1;
    }

    
}

echo $a;