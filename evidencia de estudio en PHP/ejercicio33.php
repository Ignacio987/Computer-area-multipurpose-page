<?php
//FUNCIÓN PARA LEER JSON DECODE
//el formato Json es información que nos envían algunas API
//(ej:cuando se consume un video, este tiene cierta información como el titulo, la URL, etc)
//en este ejercicio vamos a poder interpretar esta información en un arreglo

//$jsonContenido es para simular que tenemos la información, suponiendo que esta viene de un URL
$jsonContenido ='[
    {"Nombre":"Bastian", "apellido":"Lozano"},
    {"Nombre":"José", "apellido":"Perez"}
    ]';

    //con json_decode podremos leer la información y la registramos en una variable
    $result = json_decode($jsonContenido);
    print_r($result);  //imprime el arreglo en el que se almacenan los datos de json

    foreach($result as $persona){                                  //con este ciclo, permitimos la lectura de la información en el orden 
        echo ($persona->Nombre)." ".($persona->apellido). "<br>";  //que deseemos, en este caso nombres y apellidos
    }
?>