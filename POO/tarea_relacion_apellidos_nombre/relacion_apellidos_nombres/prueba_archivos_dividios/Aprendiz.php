<?php
class Aprendiz {
    private $idAprendiz;
    private $nombres;
    private $apellidos;
    private $correo;

    public function getIdAprendiz() {
        return $this->idAprendiz;
    }

    public function setIdAprendiz($idAprendiz) {
        $this->idAprendiz = $idAprendiz;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}
