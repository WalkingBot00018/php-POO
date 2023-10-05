<?php
require('Cuenta.php');

class Ahorros extends Cuenta{
    private $sucursal_apertura;
    private $fecha_apertura;
    private $tasa_interes;


    public function __construct(string $sucursal_apertura, string $fecha_apertura, float $tasa_interes, string $num_cuenta,float $saldo_pesos, float $saldo_dolares){

        parent:: __construct($num_cuenta, $saldo_pesos, $saldo_dolares);

        $this->sucursal_apertura=$sucursal_apertura;
        $this->fecha_interes=$fecha_apertura;
        $this->tasa_interes=$tasa_interes;


    }
// 
    public function get_sucursal_apertura() {
        return $this->sucursal_apertura;
    }

    public function set_sucursal_apertura($sucursal_apertura) {
        $this->sucursal_apertura = $sucursal_apertura;
    }

//
    public function get_fecha_apertura() {
        return $this->fecha_apertura;
    }

    public function set_fecha_apertura($fecha_apertura) {
        $this->fecha_apertura = $fecha_apertura;
    }
//
    public function get_tasa_interes() {
        return $this->tasa_interes;
    }

    public function set_tasa_interes($tasa_interes) {
        $this->tasa_interes = $tasa_interes;
    }

}

$ahorro1= new Ahorros("bancaria","12-10-01",12.8,"23434545",40.00,100);

echo "<br>";


echo " es: ". $ahorro1->get_sucursal_apertura();






?>