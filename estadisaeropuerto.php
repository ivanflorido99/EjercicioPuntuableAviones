<!DOCTYPE html>
<html>
    <head>
    <title>VUELO</title>
    </head>
<body>
<?php

include 'funcionesvuelo.php';

#Llamar Funciones

#Media de horas voladas total

horamedia ($duracion);

#Numero total de pasajeros

totalpasajero ($pasajero);

#Numero de aviones por fabricantes

numerofabricante ($fabricante);

#Ciudad con mas conexiones 

maximasconexiones ($destino);

#Ciudad con menos conexiones 

minimasconexiones ($destino);

?>
</body>
</html>