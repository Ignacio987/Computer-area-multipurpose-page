<?php
function conectar(){
    $conexion=mysqli_connect("db.inf.uct.cl","A2022_criquelme", "A2022_criquelme","A2022_criquelme");

    if($conexion){
        return $conexion;
    }
    else{
        echo "Error al conectar a la BD";
    }
}
?>