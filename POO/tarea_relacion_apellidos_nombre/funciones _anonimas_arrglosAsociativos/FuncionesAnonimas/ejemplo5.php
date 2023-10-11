<?php
// Funcion aninima en un arreglo


$funciones = [
    'sumar' => function($a, $b) {
        return $a + $b;
    },
    'restar' => function($a, $b) {
        return $a - $b;
    }
];
echo $funciones['sumar'](4, 3); 
