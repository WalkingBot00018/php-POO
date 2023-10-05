<?php
// CLASE DOCENTE:
class Docente {
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct(string $nombre, string $apellido, int $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
}

//INSTACIA DE DOCENTE
$docente1 = new Docente("luis", "rodriguez", 35);
$docente2 = new Docente("Maria", "Lozano", 28);
$docente3 = new Docente("Diana", "cortez", 42);
$docente4 = new Docente("Marisol", "Martinez", 38);
$docente5 = new Docente("Carlos", "Gomez", 45);



//ejecucion 
echo "Nombre del docente1 es " . $docente1->getNombre(), "<br>",// . "  " . " y el esta encargado del curso: " .$curso1->getNombreCurso();

$docente1->setNombre("carlos"), "<br>";

echo "el nuevo Nombre del docente1 es " . $docente1->getNombre();


?>
