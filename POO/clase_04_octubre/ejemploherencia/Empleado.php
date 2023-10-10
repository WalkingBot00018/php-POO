<?php
require('Persona.php');

class Empleado extends Persona{
    private string $cargo;
    private float $Salario;


    public function __construct(string $Cargo, float $Salario, string $Nombre, string $Apellido,  string $Genero){

        //LLAMAR A CONSTRUCTOR DE LA SUPERCLASE DE PERSONA
        parent::__construct($Nombre,$Apellido,$Genero);


        $this->Cargo=$Cargo;
        $this->Salario=$Salario;
        //$this->Nombre=$Nombre;
        // $this->Apellido=$Apellido;
        // $this->Genero=$Genero;
    }

//METODOS PARA LASUPER CLASE DE PERSONA
    // public function getNombreEmpleado() {
    //     return $this->Nombre;
    // }

    // public function setNombreEmpleado($Nombre) {
    //     $this->Nombre = $Nombre;
    // }

    // public function getApellidoEmpleado() {
    //     return $this->Apellido;
    // }

    // public function setApellidoEmpleado($Apellido) {
    //     $this->Apellido = $Apellido;
    // }


    // public function getGeneroEmpleado() {
    //     return $this->Genero;
    // }

    // public function setGeneroEmpleado($Genero) {
    //     $this->Genero = $Genero;
    // }



//metodo para las clases de empleado
    public function getCargo() {
        return $this->Cargo;
    }

    public function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }


    public function getSalario() {
        return $this->Salario;
    }

    public function setSalario($Salario) {
        $this->Salario = $Salario;
    }



}

$empleado=new Empleado  ("Admin",50.00, "Juan", "Perez", "M");

echo "el salario es: ". $empleado->getSalario(), "<br>";

// echo "el nombre es: " . $empleado->getNombreEmpleado(), "<br>";



?>