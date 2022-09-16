<?php
//LEER DATOS DE MYSQL CON PHP

$server="localhost";                
$user = "root";
$password = "";

try{
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";            //guardamos el codigo sql en una variable de comillas dobles

    $sentencia = $conexion->prepare($sql);     /*esta sentencia utiliza "prepare" de PDO, la que recibe la variable sql para que cuando
                                                se ejecute la sentencia este guardada en una variable y se pueda ejecutar*/

    $sentencia->execute();                    //execute es el metodo de ejecución  de la sentencia

    $result =$sentencia->fetchAll();          //para obtener la información se utuliza fetchAll lo que va a devolver todo el resultado de la sentencia
    //primera forma de imprimir resultados
    //imprime todo¿s los datos
    print_r($result);                        /*se imprimen todos los datros almacenados en la sentencia, los cuales vienen siendo los datos de la tabla
                                              "fotos", debería verse todo en un array.*/

    //segunda forma de imprimir resultados
    //este imprime los resultados que pongamos entre corchetes[], en este caso imprimiría los nombres de cada dato de la tabla, en este caso fue
    //"jugando con la programación", que es el nombre que habiamos establecido en el ejercicio anterior
    foreach($result as $foto){
        print_r($foto["nombre"]);
    //tambien se puede ingresar un echo para visualizar todo de manera mas ordenada en la página
        echo $foto["nombre"]."<br>";

    }

    echo "conexión establecida";

}catch(PDOException $error){
    echo "conexión erronea".$error;
}

?>