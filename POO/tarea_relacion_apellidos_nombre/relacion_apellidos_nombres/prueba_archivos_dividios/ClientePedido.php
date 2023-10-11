<?php
class Cliente {
    private $idCliente;
    private $nombre;
    private $correo;
    private static $contadorPedidos = 0;

    public function __construct($idCliente, $nombre, $correo) {
        $this->idCliente = $idCliente;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public static function ContadorPedidos() {
        self::$contadorPedidos++;
    }
    public static function obtenerContadorPedidos() {
        return self::$contadorPedidos;
    }

    //  getters y setters 
}

class Pedido {
    private $idPedido;
    private $cliente;

    public function __construct($idPedido, $cliente) {
        $this->idPedido = $idPedido;
        $this->cliente = $cliente;
    }

    //  getters y setters 
}
