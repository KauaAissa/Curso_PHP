<?php

$arr = [4, '3', '7', '15', true, [], '2.09', false, 'teste2', '1'];

$x = count($arr);
$y = 0;

while($y < $x) {

    if(is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;
}


?>