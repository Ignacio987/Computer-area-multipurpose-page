<?php 
//ESCRITURA DE ARCHIVOS

$nombreArchivo = "ejercicio39.txt";                   //nombre del archivo
$contenidoArchivo = "Hello world";                    //contenido del archivo

$ArchivoaCrear = fopen($nombreArchivo, "w");         //fopen abre el archivo que no existe y se pone "w" dewspués de la variable para escritura

fwrite($ArchivoaCrear, $contenidoArchivo);           //esta funcion especifica el nombre del archivo que se esta creando y se le agrega el contenido de la variable $contenidoArchivo
fclose($ArchivoaCrear);                              //se cierra el archivo para que se pueda leer y no se quede abierto por la aplicación.
?>