<?php
class Cuenta {
    private $num_cuenta;
    private $saldo_pesos;
    private $saldo_dolares;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares) {
        $this->num_cuenta = $num_cuenta;
        $this->saldo_pesos = $saldo_pesos;
        $this->saldo_dolares = $saldo_dolares;
    }

    public function getNumCuenta() {
        return $this->num_cuenta;
    }

    public function getSaldoPesos() {
        return $this->saldo_pesos;
    }

    public function getSaldoDolares() {
        return $this->saldo_dolares;
    }
}
?>