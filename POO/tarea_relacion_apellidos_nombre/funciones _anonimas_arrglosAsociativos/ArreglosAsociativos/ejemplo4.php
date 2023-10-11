<?php
//Arreglo asociativo que representa un diccionario de caracteristicas que tiene un animal

$animal = [
    'Gato' => 'garras',
    'Gallina' => 'plumas',
    'Perro' => 'olfato'
];

echo "Nombre: " . $animal['Gato']; 
echo "Caracteristica: " . $animal['Gallina']; 



foreach ($animal as $nombre => $caracteristica) {
    echo "animal: $nombre, caracteristica: $caracteristica<br>";
}
