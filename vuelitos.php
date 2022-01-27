<!DOCTYPE html>
<html>
    <head>
    <title>vuelitos</title>
    </head>
<body>
<?php

include 'funcionesvuelo.php';

$id=$_POST["vuelo"];

compañia ($compañia,$id);
    
mediapasa($pasajero,$id);

ultimosdestinos ($destino,$id);

fabri ($fabricante,$id);

minutototal ($duracion,$id);

?>
</body>

</html>