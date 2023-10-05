<?php

require_once('Cuenta.php');

class Corriente extends Cuenta {
    private $numero_chequera;
    private $fecha_emision_chequera;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares, string $numero_chequera, string $fecha_emision_chequera) {
        parent::__construct($num_cuenta, $saldo_pesos, $saldo_dolares);
        $this->numero_chequera = $numero_chequera;
        $this->fecha_emision_chequera = $fecha_emision_chequera;
    }

    // Métodos específicos de Corriente
    public function getNumeroChequera() {
        return $this->numero_chequera;
    }

    public function getFechaEmisionChequera() {
        return $this->fecha_emision_chequera;
    }
}


?>