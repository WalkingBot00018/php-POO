<?php
// Funcion anonima que utiliza una variable externa (cierre)

$factor = 2;
$calculadora = function($numero) use ($factor) {
    return $numero * $factor;
};
echo $calculadora(7); // Imprime 14
