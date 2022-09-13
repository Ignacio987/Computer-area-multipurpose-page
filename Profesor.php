<?php
    $bd = mysqli_connect("localhost", "root", "", "taller_integracion_1");

    if(!$bd)
        echo "Error en la conexión";

    $Rut_P = $_GET["P_Rut"];
    $Correo_UCT_P = $_GET["P_Correo_UCT"];
    $Contraseña_P = $_GET["P_Contraseña"];

    //CALL disparador(atributos)
    $resp = mysqli_query($bd, "CALL  ");

    if ($resp)
        echo "Se ha ingresado un nuevo alumno <br><br>";
    else
        echo "Ocurrió un error<br>";
?> 