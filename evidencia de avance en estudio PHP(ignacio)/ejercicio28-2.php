<?php
//INSERTAR DATOS EN MYSQL CON PHP
//tener en cuenta que para la ejecución de este ejercicio, solo basta con recargar la página de localhost a la que pertenece

$server="localhost";                
$user = "root";
$password = "";

try{
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //insertamos datos a la tabla de fotos de la base de datos utilizada como prueba
    $sql ="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programación', 'foto.jpg');"; /*se crea una variable donde
                                                                                                                    insertamos la istruccion para
                                                                                                                    insertar datos de una base de
                                                                                                                    datos, el nombre de la variable
                                                                                                                    puede ser cualquiera, en este
                                                                                                                    caso sql*/

    $conexion->exec($sql);                /*para hacer la ejecución de la variable que creamos anteriormente utilizamos la variable de conexion
                                            donde utilizamos un método propio de PDO llamado exec, el que ejecuta la instrucción sql */
    echo "conexión establecida";

}catch(PDOException $error){
    echo "conexión erronea".$error;
}
?>