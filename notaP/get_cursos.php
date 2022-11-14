<?php
    include('conexion.php');

    


    $con = conectar();
    $sql3="SELECT * FROM `Curso`";  

    $res3=mysqli_query($con,$sql3) or die ('Error en el query database');


//Valida que la consulta esté bien hecha
    while($row = $res3->fetch_assoc()) {
        $myArray[] = $row;
    }

    echo json_encode($myArray);

    