<?php
//CLASE ESTUDIANTE:
class Estudiante {
    private $nombre;
    private $apellido;
    private $edad;
    private $doc_Estudiante;

    public function __construct(string $nombre, string $apellido, int $edad,int $doc_Estudiante) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->doc_Estudiante = $doc_Estudiante;
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

    public function get_docEstudiante() {
        return $this->doc_Estudiante;
    }

    public function set_docEstudiante($doc_Estudiante) {
        $this->doc_Estudiante = $doc_Estudiante;
    }
}

//INSTANCIA DE ESTUDIANTE
$estudiante1 = new Estudiante("ruben", "lozano", 18, "453213456");
$estudiante2 = new Estudiante("jimena", "lozano", 22, "2345321");
$estudiante3 = new Estudiante("sara", "Rodriguez", 19, "232344321");
$estudiante4 = new Estudiante("camilo", "Lopez", 21, "234245");
$estudiante5 = new Estudiante("Valentina", "Gonzalez", 23, "32433256");


//ejecucion 
echo "el estudiante se llama: " . $estudiante4->getNombre(), "<br>",

$estudiante4->setNombre("camila"), "<br>";

echo "la nueva estudiante se llama: " . $estudiante4->getNombre();
?>