<?php
require ('Empleado.php');


$empleado = new Empleado('Medico', 80.00,'Ana', 'Ramirez', 'F');

echo "su cargo es: ".  $empleado->getCargo(), "<br>";



echo "es empleado de:". $empleado->getNombre(), "<br>"; 

echo "el sueldo es de:". $empleado->getSalario();



?>