<?php
require 'Aprendiz.php';
require 'Ficha.php';
require 'Programa.php';
require 'ClientePedido.php';
require 'ProveedorProducto.php';

//  uso:
$ficha1 = new Ficha();
$ficha1->setCodigoFicha("2560664B");


$ficha2 = new Ficha();
$ficha2->setCodigoFicha("2560664A");


$aprendiz1 = new Aprendiz();
$aprendiz1->setIdAprendiz("12");
$aprendiz1->setNombres("Ruben");
$aprendiz1->setApellidos("Lozano");
$aprendiz1->setCorreo("rlozanotique@gmail.com");

$aprendiz2 = new Aprendiz();
$aprendiz2->setIdAprendiz("2");
$aprendiz2->setNombres("Jimena");
$aprendiz2->setApellidos("Gutierrez");
$aprendiz2->setCorreo("jimena.gutierrezz@soy.sena.edu.co");

$ficha1->addAprendiz($aprendiz1);
$ficha1->addAprendiz($aprendiz2);

$programa1 = new Programa();
$programa1->setCodigoPrograma("218120");
$programa1->setNombrePrograma("ADSO");


//+++++++parte cliente pedido++++++++++

$cliente1 = new Cliente(1, "Pablo", "Pablo@Hotmail.com");
$pedido1 = new Pedido(1, $cliente1);

Cliente::ContadorPedidos();



//++++++proveedor++++++
$proveedor1 = new Proveedor("juridico", "lucas", "bogota", "lucas@gmail.com", "123456789", "call 32 #4");
$producto1 = new Producto("computadores", 100.99, $proveedor1);

//++++++++ejecucion+++++++++

echo "<b>"."Ficha: ". "</b>" . $ficha1->getCodigoFicha() . "</br>";
echo "<b>". "Programa: ". "</b>" . $programa1->getNombrePrograma() . "</br>";
echo "<b>". "Aprendices en la ficha: ". "</b>" . count($ficha1->getAprendices()) . "</br>";
echo "<b>". "Número de fichas creadas: ". "</b>" . Ficha::getContador() . "</br>";
echo "<b>". "Número de pedidos del cliente: ". "</b>" . Cliente::obtenerContadorPedidos() . "</br>";


