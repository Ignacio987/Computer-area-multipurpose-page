<?php
$usuario = $_POST['user'];
$contraseña = $_POST['password'];

session_start();
$_SESSION['user'] = $usuario;

include("conexion.php");

$consulta = "SELECT * FROM usuarios where rut ='$usuario' and contrasenia ='$contraseña'";

$result = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($result);

if($filas["id_cargo"] == 1){
    header("location:PaginaEstudiante/code.html");

}else if ($filas["id_cargo"] == 2){
    header("location:PaginaProfesor/calif.html");

}else if ($filas["id_cargo"] != 1 && 2){
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