<?php

//CLASE BLOQUE
class Bloque {
    private $nombreBloque;

    public function __construct(string $nombreBloque) {
        $this->nombreBloque = $nombreBloque;
    }

    public function getNombreBloque() {
        return $this->nombreBloque;
    }

    public function setNombreBloque($nombreBloque) {
        $this->nombreBloque = $nombreBloque;
    }
}


//INSTANCIA DE BLOQUE
$bloque1 = new Bloque("A");
$bloque2 = new Bloque("B");
$bloque3 = new Bloque("C");
$bloque4 = new Bloque("D");
$bloque5 = new Bloque("E");


//ejecucion 
echo "el bloque es: " . $bloque5->getNombreBloque(), "<br>",

$bloque5->setNombreBloque("JE"), "<br>";

echo "el nuevo bloque  es: " . $bloque5->getNombreBloque();
?>