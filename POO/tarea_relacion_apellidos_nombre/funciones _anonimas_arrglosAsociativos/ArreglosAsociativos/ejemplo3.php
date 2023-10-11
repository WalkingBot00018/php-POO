<?php

//Arreglo asociativo con datos de un coche

$coche = [
    'marca' => 'Toyota',
    'modelo' => 'Corolla',
    'año' => 2022
];


echo "marca: " . $coche['marca']; 
echo "modelo: " . $coche['modelo']; 



foreach ($coche as $marca => $modelo) {
    echo "coche: $marca, modelo: $modelo<br>";
}