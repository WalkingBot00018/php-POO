<?php 
class Automotor{
    private string $marca;
    private string $modelo;
    private float $precio;

    public function __construct(string $marca, string $modelo, float $precio){
        $this->marca->$marca;
        $this->modelo->$modelo;
        $this->precio->$precio;
    }

    public function set_marca($marca){
        $this->marca=$marca;
    }
    public function get_marca(){
        return $this->marca;
    }

    public function set_modelo($modelo){
        $this->modelo=$modelo;
    }
    public function get_modelo(){
        return $this->modelo;
    }

    public function set_precio($precio){
        $this->precio=$precio;
    }
    public function get_precio(){
        return $this->precio;
    }

    public function saludar(){
        echo '¡Bienvenido!';
    }
}

?>