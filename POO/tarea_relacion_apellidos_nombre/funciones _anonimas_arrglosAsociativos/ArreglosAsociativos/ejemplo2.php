<?php
//Arreglo asociativo con productos y sus precios

$productos = [
    'manzanas' => 1.99,
    'plátanos' => 0.99,
    'peras' => 2.49
];

echo "Nombre: " . $productos['Gato']; 
echo "precio: " . $productos['Gallina']; 



foreach ($productos as $nombre => $precio) {
    echo "producto: $nombre, precio: $precio<br>";
}