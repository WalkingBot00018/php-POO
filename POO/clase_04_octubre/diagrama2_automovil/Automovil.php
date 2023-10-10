<?php 
require_once('Automotor.php');

class Automovil extends Automotor{
    private string $tipo;
    private string $color;

    public function __construct(string $marca,string $modelo,float $precio,string $tipo, string $color){
        parent::__construct($marca,$modelo,$precio);
        $this->tipo=$tipo;
        $this->color=$color;
    }
    public function set_tipo($tipo){
        $this->tipo=$tipo;
    }
    public function set_color($color){
        $this->color=$color;
    }
    
    public function get_mostrar_datos(){
        return $this->tipo;
        
    }
    public function get_color(){
        
        return $this->color;
    }


}

?>