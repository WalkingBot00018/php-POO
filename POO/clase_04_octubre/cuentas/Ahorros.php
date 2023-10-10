<?php
require_once('Cuenta.php');

class Ahorros extends Cuenta {
    private $sucursal_apertura;
    private $fecha_apertura;
    private $tasa_interes;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares, string $sucursal_apertura, string $fecha_apertura, float $tasa_interes) {
        parent::__construct($num_cuenta, $saldo_pesos, $saldo_dolares);
        $this->sucursal_apertura = $sucursal_apertura;
        $this->fecha_apertura = $fecha_apertura;
        $this->tasa_interes = $tasa_interes;
    }

    // Métodos específicos de Ahorros
    public function getSucursalApertura() {
        return $this->sucursal_apertura;
    }

    public function getFechaApertura() {
        return $this->fecha_apertura;
    }

    public function getTasaInteres() {
        return $this->tasa_interes;
    }
}




?>