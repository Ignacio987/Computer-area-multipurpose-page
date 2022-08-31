<?php
//ENVIO DE DATOS CON METODO GET (MUESTRA LOS DATOS EN LA URL)
    if($_GET){
    $nombre = $_GET['nombre'];
    echo "Hola ".$nombre;
}