<?php
require('Cuenta.php');
class Corriente extends Cuenta {

    private $numero_chequera;
    private $fecha_emision_chequera;



    public function __construct(string $numero_chequera, string $fecha_emision_chequera, string $num_cuenta,float $saldo_pesos, float $saldo_dolares){

        parent:: __construct($num_cuenta, $saldo_pesos, $saldo_dolares);

        $this->numero_chequera=$numero_chequera;
        $this->fecha_emision=$fecha_emision_chequera;

    }


    public function get_numero_chequera() {
        return $this->numero_chequera;
    }

    public function set_numero_chequera($numero_chequera) {
        $this->nmuero_chequera = $numero_chequera;
    }


    public function get_fecha_emision_chequera() {
        return $this->fecha_emision_chequera;
    }

    public function set_fecha_emision_chequera($sucursal_apertura) {
        $this->sucursal_apertura = $sucursal_apertura;
    }





}


$corriente1= new Corriente ("21345","12-09-31","23434545",40.00,100);

echo "<br>";

// echo "el numero es: ". $ahorro1->get_numero_chequera();


?>