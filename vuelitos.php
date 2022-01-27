<!DOCTYPE html>
<html>
    <head>
    <title>VUELO</title>
    </head>
<body>
<?php

include 'funciones.php';

#Formulario

$id=$_POST["vuelo"];

#Llamar funciones

#Compañia

compañia ($compañia,$id);

#Media Pasajeros
    
mediapasa($pasajero,$id);

#Últimos destinos

ultDestinos ($destino,$id);

#Frabricante

fabri ($fabricante,$id);

#Minutos totales

minutosTotales ($duracion,$id);

?>
</body>

</html>