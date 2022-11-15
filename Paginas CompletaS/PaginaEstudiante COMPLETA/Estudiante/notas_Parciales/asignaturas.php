<?php
    include('conexion.php');

    $curso = "21.421.217-k";


    $con = conectar();
    $sql3="SELECT `Cursos Inscritos` FROM `alumno` WHERE alumno.Rut = '$curso'";  

    $res3=mysqli_query($con,$sql3) or die ('Error en el query database');


//Valida que la consulta esté bien hecha
    while($row = $res3->fetch_assoc()) {
        $myArray = $row;
    }

    echo json_encode($myArray);

    