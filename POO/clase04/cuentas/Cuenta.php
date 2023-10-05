<?php

class Cuenta{
    private $num_cuenta;
    private $saldo_pesos;
    private $saldo_dolares;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares){
        $this->num_cuenta=$num_cuenta;
        $this->saldo_pesos=$saldo_pesos;
        $this->saldo_dolares=$saldo_dolares;
    }



    public function get_num_cuenta(){
        return $this-> num_cuenta;
    }

    public function get_saldo_pesos(){
        return $this-> saldo_pesos;
    }

    public function get_saldo_dolares(){
        return $this-> saldo_dolares;
    }
}

$cuenta1= new Cuenta("213456", 400, 100);

// echo "el saldo de pesos es: ". $cuenta1->get_saldo_pesos();


?>