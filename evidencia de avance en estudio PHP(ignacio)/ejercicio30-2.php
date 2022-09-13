<?php
//LECTURA DE LAS VARIABLES DEL EJERCICIO 30-1
//el resultado de esto se ve reflejado por la página

session_start(); 

if (isset($_SESSION["user"])){
    echo "usuario: ".$_SESSION["user"]."<br>"."estado: ".$_SESSION["status"];
}else{
echo "NO HAY DATOS";
}

?>