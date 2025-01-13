<?php

$lista = ["arroz", "trigo", "cerveja", "sal", "vinagre"];

function listaParaString($arr) {

    $str = "VocÊ levou estes itens do mercado: ";

    for($i = 0; $i < count($lista); $i++) {

        if($i + 1 == count($arr)) {
            $str .= "$arr[$i].";
        }
        else {
            $str .= "$arr[$i], ";
        }

    }

    return $str;

}

echo listaParaString($lista);

?>