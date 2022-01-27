<?php
include 'arrayvuelos.php';

$Vuelo = $_POST["vuelo"];

/*Media de horas*/
$mediavuelo = array_sum($duracion)/count($duracion);

/*Numero total de pasajeros de todos los vuelos*/
$pasajeros = array_sum($pasajeros);

/*Número de aviones por fabricante*/












/*Destino con más conexiones*/

/*Destinos con menos conexiones*/

/*El número totales de ciudades visitadas*/
$destino = count($destino);

/*Las veces que se ha ido a una determinada ciudad.*/

function visitas ($destino){
    $visita=array_count_values(array_column($destino, 'Destino'));
    echo "visitas: "."<br>";
   
    foreach ($visita as $visitilla => $num) {
    echo $visitilla . ": " . $num . "<br>";
 }
}

/*Cual es la ciudad más visitada.*/


/*Cuales son las ciudades menos visitadas.*/



/*Destinos del avión*/


/*Fabricante*/

function fabricante ($fabricante,$id){

    foreach ($fabricante as $modelo) {
           $fabrica=$modelo["Fabricante"];
          
           $Vuelo=$modelo["Vuelo"];
           if ($Vuelo == $id) {
          
            }
    }
    echo "El fabri es  ". $fabrica."<br>";
    }
    

/*Minutos totales*/
function minutototal ($duracion,$id){
    $num=0;

    foreach ($duracion as $tiempecito) {
        $tarda=$tiempecito["Tiempo"];
        $Vuelo=$tiempecito["Vuelo"];
       
        if ($Vuelo == $id) {
            $num=$num+$tarda;
        }
    }
    echo "Minutos totales : ". $numero."<br>";
}

/*Media de horas*/
function horamedia ($duracion){
    $i=0;
    $num=0;
        foreach ($duracion as $tiempecito) {
            $duracion=$tiempecito["Tiempo"];
            $num=$num+$duracion;
            $i++;
        }
            $total=$num/$i;
            $hora = $total/60;
    echo " Media de horas : ". $hora . "h" ."<br>";
}


/*Mediapasa*/
function mediapasa ($pasajero,$id){
    $i=0;
    $num=0;
        foreach ($pasajero as $pasa) {
            $pasajero=$pasa["Pasajero"];
            $Vuelo=$pasa["Vuelo"];
            if ($Vuelo == $id) {
                $num=$num+$pasajero;
                $i++;
            }
        }
        echo "La media es ". $num/$i."<br>";
    }
/*Pasajeros totales*/

function totalPasajero ($pasajero){
    $num=0;
        foreach ($pasajero as $pasa) {
            $pasajero=$pasa["Pasajeros"];
            $numero=$numero+$pasa;
        }
    echo "paasajeros totales: ". $num ."<br>";
}

?>