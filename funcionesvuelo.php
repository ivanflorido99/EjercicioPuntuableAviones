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


/*Cual es la ciudad más visitada.*/


/*Cuales son las ciudades menos visitadas.*/



/*Destinos del avión*/


/*Fabricante del avión*/


/*Minutos totales*/
$minutosvolando = array_sum($tiempo);

/*Media de horas*/
$mediahvoladas = (array_sum($tiempo)/60)/count($tiempo);

/*Media de pasajeros*/
$pasajeros = array_sum($pasajeros)/count($pasajeros);

/*Pasajeros totales*/
$pasajeros = array_sum($pasajeros);

?>