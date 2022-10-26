<?php
$usuario = $_POST['user'];
$contraseña = $_POST['password'];

session_start();
$_SESSION['user'] = $usuario;

include("conexion.php");

$consulta = "SELECT * FROM LoginUsuarios where rut ='$usuario' and password ='$contraseña'";

$result = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($result);

if($filas){
    header("location:PaginaEstudiante\Estudiante\code.html");
}else{
    ?>
    <?php
    include("index.html");
    ?>
    <div >
        <h3>error!</h3>
        <p>ingrese los datos correctamente.</p>
    </div>
    <?php

}
mysqli_free_result($result);
mysqli_close($conexion);
?>