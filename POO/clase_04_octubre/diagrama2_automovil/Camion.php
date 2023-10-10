<?php 
require_once('Automotor.php');
class Camion extends Automotor{
    private int $num_ejes;
    private int $capacidad_carga;

    public function __construct(string $marca, string $modelo, float $precio,int $num_ejes, int $capacidad_carga){
        parent::__construct($marca,$modelo,$precio);
        $this->num_ejes=$num_ejes;
        $this->capacidad_carga=$capacidad_carga;
    }

    public function set_num_ejes($num_ejes){
        $this->num_ejes=$num_ejes;
    }
    public function set_capacidad_carga($capacidad_carga){
        $this->capacidad_carga=$capacidad_carga;
    }
    public function get_capacidad_carga(){
        // return $this->num_ejes;
        return $this->capacidad_carga;
    }
    public function get_set_num_ejes(){
         return $this->num_ejes;
        
    }
}

?>