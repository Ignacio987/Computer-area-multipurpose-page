<?php
//CONECTAR PHP A MYSQL
//DE AQUI EN ADELANTE SE USAN BASES DE DATOS COMO PRUEBA

$server="localhost"; /*se crea una variable del servidor, se puede poner una dirección ip(127.0.0.1 que es la dirección local) 
                        pero como estamos utilizando XAMPP basta con escribir "localhost", que es lo mismo*/
                        
$user = "root";      /*en esta situación escribimos "root" en usuario y "" sin información en contraseña, esto pq estamos utilizando*/
$password = "";      /*xampp desde el pc local, en caso de hacer la conexión en un pc distinto al de la base de datos, crear un usuario 
                        y contraseña para hacer la conexión a través de estas*/ 


/*try y catch se utilizan como una "condicional" de errores, los cuales pueden ser controlados por estas, solo que los errores 
no los podemos controlar nosotros con programación
si en try no existe un error continúa con la conexión, si hay un error lo recibe el catch*/

try{
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password); /*PDO es una clase que nos permite la conexión a la base de datos
                                                                                la cual en xampp viene activada, en el paréntesis se escriben los 
                                                                                argumentos de la base de datos a conectar, en "dbname" se ecribe
                                                                                el nombre de la base de datos, en este caso creé una de nombre 
                                                                                "album" para utlizar como prueba, se finaliza con las variables 
                                                                                de usuario y contraseña.*/

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      /*setAttribute es un método que contiene propiedades que nosotros 
                                                                               vamos a poder controlar, entre parentesis ponemos propiedades que
                                                                               nos permita acceder a los errores.*/

    echo "conexión establecida";                                             /*en caso de no haber ningun tipo de error este mostrará "conexión 
                                                                               establecida" por pantalla.*/


}catch(PDOException $error){
    echo "conexión erronea".$error;                                         /*la variable de error nos muestra el tiopo de error que existe en
                                                                              la conexión*/
}
?>