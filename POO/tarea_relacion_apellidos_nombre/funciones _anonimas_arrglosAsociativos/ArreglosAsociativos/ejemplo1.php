<?php

//  Arreglo asociativo con informacion de una persona

$persona = [
    'nombre' => 'Juan',
    'edad' => 30,
    'ciudad' => 'Madrid'
];

echo "Nombre: " . $persona['nombre']; 
echo "edad: " . $persona['edad']; 



foreach ($persona as $nombre => $edad) {
    echo "persona: $nombre, edad: $edad<br>";
}