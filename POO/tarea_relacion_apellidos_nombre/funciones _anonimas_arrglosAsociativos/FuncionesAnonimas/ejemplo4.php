<?php
// Funcion anonima como argumento de otra funcion.
function operar($a, $b, $operacion) {
    return $operacion($a, $b);
}
$resultado = operar(10, 5, function($a, $b) {
    return $a - $b;
});
echo $resultado; 
