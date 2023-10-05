<?php

// CLASE SALON

class Salon {
    private $nroSalon;

    public function __construct(string $nroSalon) {
        $this->nroSalon = $nroSalon;
    }

    public function getnroSalon() {
        return $this->nroSalon;
    }

    public function setnroSalon($nroSalon) {
        $this->nroSalon = $nroSalon;
    }
}

//INSTANCIA DE SALON
$salon1 = new Salon("201");
$salon2 = new Salon("202");
$salon3 = new Salon("203");
$salon4 = new Salon("204");
$salon5 = new Salon("205");


//ejecucion 
echo "el salon es: " . $salon5->getNroSalon(), "<br>",

$salon5->setNroSalon("103"), "<br>";

echo "el nuevo salon es: " . $salon5->getNroSalon();
?>
