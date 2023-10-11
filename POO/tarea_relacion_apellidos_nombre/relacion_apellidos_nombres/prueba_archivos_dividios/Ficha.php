<?php
class Ficha {
    private $codigoFicha;
    private $aprendices = array();
    private static $contador = 0; // Contador estático

    public function __construct() {
        self::$contador++;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function getCodigoFicha() {
        return $this->codigoFicha;
    }

    public function setCodigoFicha($codigoFicha) {
        $this->codigoFicha = $codigoFicha;
    }

    public function getAprendices() {
        return $this->aprendices;
    }

    public function addAprendiz($aprendiz) {
        $this->aprendices[] = $aprendiz;
    }
}