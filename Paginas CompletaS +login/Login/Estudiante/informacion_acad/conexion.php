<?php
function conectar(){
    $conexion=mysqli_connect("localhost","root", "","TALLER_INT");

    if($conexion){
        return $conexion;
    }
    else{
        echo "Error al conectar a la BD";
    }
}
?>