<?php
include 'arrayvuelos.php';

$Vuelo = $_POST["vuelo"];

/*Destino con más conexiones*/

function maximasconexiones ($destino){
    $maximaconexiones=max(array_column($destino, 'Destino'));
    echo "las ciudades con mas conexion: " . $maximaconexiones . "<br>";
}

/*Destinos con menos conexiones*/

function minimasconexiones ($destino){
    $num=array_count_values(array_column($destino, 'Destino'));
    

    foreach ($num as $num2 => $nume) {
        
        
        $minmoconexione= min(array_count_values($num));
        if ($nume == $minmoconexione) {
           
            echo "ciudades con menos conexion: "."<br>";
            echo $num2 . "<br>";
        }
    }
}

/*El número totales de ciudades visitadas*/
function destinos ($destino){
   
    $array=array_unique(array_column($destino, 'Destino'));
    $arrayLi=array_intersect_key($destino,$array);
    echo " Numero total de ciudades visitadas: ".count($arrayLi)."<br>";
}


/*Las veces que se ha ido a una determinada ciudad.*/

function visitas ($destino){
   
    $visita=array_count_values(array_column($destino, 'Destino'));
    echo "visitas: "."<br>";
   
    foreach ($visita as $visitilla => $num) {
    echo $visitilla . ": " . $num . "<br>";
 }
}

/* ciudad más visitada.*/


function maximovisitas ($destino){
   
    $visitasmax=max(array_column($destino, 'Destino'));
    echo "La ciudad mas visitada es: " . $visitasmax . "<br>";
}

/*ciudades menos visitadas.*/

function minimovisitas ($destino){
    $num=array_count_values(array_column($destino, 'Destino'));
    echo "Las ciudades menos visitadas son:"."<br>";
    
    foreach ($num as $numerovisitas => $numerito ) {
        $menosvisit=min(array_count_values($num));
        if ($numerito ==  $menosvisit) {
            echo $numerovisitas . "<br>";
        }
    }
}


#Últimos destinos

function ultimosdestinos ($destino,$id){
    
    echo "  Vueling le informa de que sus ultimos destinos son: ";
   
    foreach ($destino as $ultimodestino) {
           
        $ulti=$ultimodestino["Destino"];
          
        $Vuelo=$ultimodestino["Vuelo"];
           
        if ($Vuelo == $id) {
              
            echo $ulti.", ";
            }
    }
    }


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


/*Utimos <destinosssss></destinosssss*/


function ultimosdestinos ($destino,$id){
   
    foreach ($destino as $ultimodestino) {
           
        $ulti=$ultimodestino["Destino"];
           
        
        $Vuelo=$ultimodestino["Vuelo"];
           
        if ($Vuelo == $id) {
              echo $ulti.", ";
            }
    }
    echo " Ultimos destinos: ";
    echo "<br>";
    }


#Compañia

function compañia ($compañia,$id){
    
    foreach ($compañia as $compañia21) {
        
        $compañia21=$compañia21["Compañia"];
        
        $Vuelo=$compañia21["Vuelo"];
       
        if ($Vuelo == $id) {
            echo "la compañia con la que vuelas es : ". $compañia21."<br>";
            }
    }
}







?>