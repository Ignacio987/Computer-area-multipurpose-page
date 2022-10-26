
<?php



    $servername = "db.inf.uct.cl";
    $database = "A2022_criquelme";
    $username = "A2022_criquelme";
    $password = "A2022_criquelme";

    
    $con = mysqli_connect($servername, $username, $password, $database) or die ('Error en la conexion');  
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
    
    $cursos = [];
    // foreach($Cursos_ins as $sigla){
         
    //     $sql3="SELECT * FROM `Curso` WHERE Curso.Siglas = $sigla ";  

    //     $res3=mysqli_query($con,$sql3) or die ('Error en el query database');

    // //Valida que la consulta esté bien hecha
    //     while($item = $res3->fetch_array()){
    //         $cursos[] = [
    //             'siglas' => $item['Siglas'],
    //             'semestre' => $item['Semestre'],
    //             'anio' => $item['Anio'],
    //             'nombre_curso' => $item['Nombre_Curso'],
    //             'seccion' => $item['Seccion'],
    //             'creditos' => $item['Creditos'],
    //             'tipo' => $item['Tipo'],
    //             'salas_horarios' => $item['Salas_Horarios']
                
    //         ];
    //     }
    // }
        $sql3="SELECT * FROM `Curso` WHERE Curso.Siglas = 'L11' ";  

        $res3=mysqli_query($con,$sql3) or die ('Error en el query database');

    //Valida que la consulta esté bien hecha
        while($item = $res3->fetch_array()){
            $cursos[] = [
                'siglas' => $item['Siglas'],
                'semestre' => $item['Semestre'],
                'anio' => $item['Anio'],
                'nombre_curso' => $item['Nombre_Curso'],
                'seccion' => $item['Seccion'],
                'creditos' => $item['Creditos'],
                'tipo' => $item['Tipo'],
                'salas_horarios' => $item['Salas_Horarios']
                
            ];
        }
    echo json_encode([$data,$data2,$cursos]);
    
      //Si ya no ocupas la conexión, cierrala
    mysqli_close( $con );
    

    
    
     ?>
    