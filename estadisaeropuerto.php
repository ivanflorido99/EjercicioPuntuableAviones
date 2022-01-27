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

mediaHoras ($duracion);

#Numero total de pasajeros

totalPasajeros ($pasajeros);

#Numero de aviones por fabricantes

numFabricante ($fabricante);

#Ciudad con mas conexiones 

maxConexiones ($destino);

#Ciudad con menos conexiones 

minConexiones ($destino);

?>
</body>
</html>