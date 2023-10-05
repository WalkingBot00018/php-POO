<?php


// Incluye los archivos que contienen las definiciones de las clases
require_once('Cuenta.php');
require_once('Ahorros.php');
require_once('corriente.php');

// Crea una instancia de la clase Ahorros
$ahorro = new Ahorros("123456", 500, 200, "Bancaria", "2023-10-04", 10.5);

// Crea una instancia de la clase Corriente
$corriente = new Corriente("789012", 1000, 300, "98765", "2023-10-05");

// Crea una instancia de la clase Cuenta
$cuenta = new Cuenta("987654", 1000, 500);

// Accede a los métodos de la instancia de Cuenta
echo "Número de cuenta: " . $cuenta->getNumCuenta() . "<br>";
echo "<br>";

echo "Saldo en pesos: " . $cuenta->getSaldoPesos() . "<br>";
echo "<br>";
echo "Saldo en dólares: " . $cuenta->getSaldoDolares() . "<br>";

// Accede a los métodos de las instancias
echo "Número de cuenta de Ahorros: " . $ahorro->getNumCuenta() . "<br>";
echo "Saldo en pesos de Ahorros: " . $ahorro->getSaldoPesos() . "<br>";
echo "Sucursal de apertura de Ahorros: " . $ahorro->getSucursalApertura() . "<br>";

echo "<br>";

echo "Número de cuenta de Corriente: " . $corriente->getNumCuenta() . "<br>";
echo "Saldo en pesos de Corriente: " . $corriente->getSaldoPesos() . "<br>";
echo "Número de chequera de Corriente: " . $corriente->getNumeroChequera() . "<br>";


?>