<?php
// Arreglo asociativo con informacion de un libro.

$libro = [
    'titulo' => '100 años de soleda',
    'autor' => 'Gabriel Garcia Marquez',
    'año_publicación' => 1967
];


echo "Nombre: " . $libro['titulo']; 
echo "autor: " . $libro['autor']; 



foreach ($libro as $nombre => $autor) {
    echo "libro: $nombre, autor: $autor<br>";
}