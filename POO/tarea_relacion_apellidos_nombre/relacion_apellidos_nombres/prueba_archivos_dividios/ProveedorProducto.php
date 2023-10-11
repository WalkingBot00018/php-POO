<?php
class Proveedor {
    private $tipoProveedor;
    private $nombre;
    private $ciudad;
    private $correo;
    private $telefono;
    private $direccion;

    public function __construct($tipoProveedor, $nombre, $ciudad, $correo, $telefono, $direccion) {
        $this->tipoProveedor = $tipoProveedor;
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    //  getters y setters 
}

class Producto {
    private $nombre;
    private $precio;
    private $proveedor; // Relación con Proveedor

    public function __construct($nombre, $precio, $proveedor) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->proveedor = $proveedor;
    }

    //getters y setters 
}