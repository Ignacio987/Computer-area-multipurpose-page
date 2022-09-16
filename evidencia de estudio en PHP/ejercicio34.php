<?php
//FUNCIÓN PARA JSON ENCODE
//Caso contrario que con el json decode, en este caso vamos a pasar información a un formato json 
//esto nos sirve para proporcionar la información a otras aplicaciones

$personas =array ("Bastian"=>40, "José"=>30, "Maria"=>24);         //array que contiene nombres y edades

echo json_encode($personas)                                        //json_encode recibe de parametro el arreglo, y lo cambia de formato a json
?>