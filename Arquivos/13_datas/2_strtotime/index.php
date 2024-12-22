<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dezDias = strtotime("10 days");

echo $dezDias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincoDias);

echo $dataAtualMais5 . "<br>";

$dataAtualMais10 = date('d/m/y', $dezDias);

echo $dataAtualMais10 . "<br>";

$doisMeses = strtotime("2 months");

echo $doisMeses . "<br>";

$dataAtualMaisDoisMeses = date('d/m/Y', $doisMeses);

echo $dataAtualMaisDoisMeses . "<br>";

$dozeAnos = strtotime("12 years");

echo date('d/m/Y', $dozeAnos) . "<br>";