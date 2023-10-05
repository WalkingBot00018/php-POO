<?php

// CLASE ASIGNATURA:
class Asignatura {
    private $nombre;
    

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

  
}


//INSTANCIA DE ASIGNATURA
$asignatura1 = new Asignatura("Matemáticas");
$asignatura2 = new Asignatura("Español");
$asignatura3 = new Asignatura("Biologia");
$asignatura4 = new Asignatura("Informatica");
$asignatura5 = new Asignatura("Inglés");


//ejecucion 
echo "la asignatura es: " . $asignatura1->getNombre(), "<br>",

$asignatura1->setNombre("calculo"), "<br>";

echo "la nueva asignatura es: " . $asignatura1->getNombre();



?>