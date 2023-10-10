<?php

class Persona{

    private string $Nombre;
    private string $Apellido;
    private string $Genero;

    public function __construct(string $Nombre, string $Apellido,string $Genero){
        $this->Nombre=$Nombre;
        $this->Apellido=$Apellido;
        $this->Genero=$Genero;

    }


    public function saludo(){
        echo "HOLA BIENVENIDO ALA CLASE: {$this->Nombre}";
    }

//METODO GET Y SET PARA EL NOMBRE
    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

//METODO SET Y GET PARA EL APELLIDO

    public function getApellido(){
        return $this->Apellido;
    }

    public function setApellido(){
        $this->Apellido=$Apellido;
    }
//

    public function getGenero(){
        return $this->Genero;

    }

    public function setGenero(){
        $this->Genero=$Genero;
    }
}


$persona1= new Persona("Juan", "Perez", "M");
// $persona1->saludo();





?>