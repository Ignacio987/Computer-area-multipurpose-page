<?php
    include('conexion.php');

    $curso = isset($_POST['curso']) ? $_POST['curso'] : 'vacio';


    $con = conectar();
    $sql3="SELECT * FROM `Curso` WHERE Curso.Siglas = '$curso'";  

    $res3=mysqli_query($con,$sql3) or die ('Error en el query database');


//Valida que la consulta esté bien hecha
    while($row = $res3->fetch_assoc()) {
        $myArray[] = $row;
    }

    echo json_encode($myArray);

    