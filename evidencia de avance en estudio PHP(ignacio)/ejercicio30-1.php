<?php
//VARIABLES DE SESSION 
//sirve para crear una autenticación o mantener datos (como en un acarro de compras o login de usuario)

session_start(); //esta instruccion sirve para mantener información en la pagina mientras el navegador este abierto 

//las siguientes variables pueden almacenar cualquier tipo de dato, a diferencia de las variables php

$_SESSION["user"]="Matías";   //variable usuario de tipo sesión
$_SESSION["status"]="logueado";    //variable estado de tipo sesión

echo "sesión iniciada".":<br>";

echo "usuario: ".$_SESSION["user"]."<br>"."estado: ".$_SESSION["status"];

//lo interesante de este tipo de variables, es que se pueden llamar desde otros archivos solo con la instrucción session_start();, ejemplo en el ejercicio 30-2
//en este caso, la informacion se pierde al cerrar el navegador.
?>