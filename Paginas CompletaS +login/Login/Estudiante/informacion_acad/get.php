
<?php



    include("conexion.php");
    
    $con = conectar();  
        $sql="SELECT * FROM `alumno` WHERE alumno.Rut = '21.421.217-k' ";  
        $res=mysqli_query($con,$sql) or die ('Error en el query database');

    //Valida que la consulta esté bien hecha
    $data = [];
    while($item = $res->fetch_array()){
        $data[] = [
            'nombre' => $item['Nombre'],
            'rut' => $item['Rut'],
            'correo' => $item['Correo'],
            'cursos_ins' => $item['Cursos Inscritos'],
            'fecha' => $item['Fecha de Ingreso'],
            'plan' => $item['Plan'],
            'registro' => $item['Registro'],
            'situacion' => $item['Situacion'],
            'id_carrera' => $item['Id_Carrera']
            
        ];
        $id_carrera = $item['Id_Carrera'];
        $Cursos_ins[] =  explode( ",", $item['Cursos Inscritos'], PHP_INT_MAX) ;
    }
    
        $sql2="SELECT * FROM `Carrera` WHERE Carrera.Id_Carrera = 0 ";  
        $res2=mysqli_query($con,$sql2) or die ('Error en el query database');
    //Valida que la consulta esté bien hecha
    $data2 = [];
    while($item = $res2->fetch_array()){
        $data2[] = [
            'id_carrera' => $item['Id_Carrera'],
            'Nombre_Carrera' => $item['Nombre_Carrera']
                
        ];

    }
    echo json_encode([$data,$data2]);
    
      //Si ya no ocupas la conexión, cierrala
    mysqli_close( $con );
    

    
    
     ?>
    
