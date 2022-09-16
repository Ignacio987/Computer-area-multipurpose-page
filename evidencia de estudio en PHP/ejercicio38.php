<?php 
//ABRIR UN ARCHIVO CON PHP

$archivo ="ejercicio38.txt";                              //en caso de estar en una carpeta se ingresa la ruta
$archivoabierto = fopen($archivo, "r");                   //la función fopen sirve para abrir el archivo, la r después de la variable es
                                                          //la opción de lectura

$contenido = fread($archivoabierto, filesize($archivo)); //fread sirve para leer todo el contenido una vez abierto, filesize es solo el tamaño o 
                                                         //longitud, en este caso ponemos la longitud del mismo archivo

echo $contenido;                                         //imprime el contenido del archivo
?>