<?php
//CLASE CURSO:
class Curso {
    private $nombreCurso;
    

    public function __construct(string $nombreCurso) {
        $this->nombreCurso = $nombreCurso;
       
    }

    public function getNombreCurso() {
        return $this->nombreCurso;
    }

    public function setNombreCurso($nombreCurso) {
        $this->nombreCurso = $nombreCurso;
    }

   

    
}


//INSTANCIA DE CURSO
$curso1 = new Curso("Once");
$curso2 = new Curso("Noveno");
$curso3 = new Curso("Decimo");
$curso4 = new Curso("Septimo");
$curso5 = new Curso("Octavo");


//ejecucion 
echo "el curso es: " . $curso2->getNombreCurso(), "<br>",

$curso2->setNombreCurso("Quinto"), "<br>";

echo "el nuevo curso es: " . $curso2->getNombreCurso();


?>