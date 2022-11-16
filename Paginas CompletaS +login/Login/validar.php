<?php
$usuario = $_POST['user'];
$contraseña = $_POST['password'];

session_start();
$_SESSION['user'] = $usuario;

include("conexion.php");

$consulta = "SELECT * FROM usuarios where rut ='$usuario' and contrasenia ='$contraseña'";

$result = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($result);
$cargo = mysqli_fetch_array($result);

if( $filas && $cargo["id_cargo"] == 1){
    header("location:Estudiante\code.html");

}else if ($filas && $cargo["id_cargo"] == 2){
    header("location:visuales_profesor\calif.html");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <div style="color: white; text-align:center; padding:20px;">
        <h3>error!</h3>
        <p>ingrese los datos correctamente.</p>
    </div>
    <?php
}
mysqli_free_result($result);
mysqli_close($conexion);
?>