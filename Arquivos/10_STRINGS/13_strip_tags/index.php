<?php

$textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>outro paragrafo</p>";
echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;