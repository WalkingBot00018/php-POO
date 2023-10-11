<?php
class Programa {
    private $codigoPrograma;
    private $nombrePrograma;

    public function getCodigoPrograma() {
        return $this->codigoPrograma;
    }

    public function setCodigoPrograma($codigoPrograma) {
        $this->codigoPrograma = $codigoPrograma;
    }

    public function getNombrePrograma() {
        return $this->nombrePrograma;
    }

    public function setNombrePrograma($nombrePrograma) {
        $this->nombrePrograma = $nombrePrograma;
    }
}