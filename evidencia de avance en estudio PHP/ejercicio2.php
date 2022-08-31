<?php
// ENVIO DE DATOS CON METODO POST (NO MUESTRA LOS DATOS EN LA URL)

// recibe la información del formulario html (metodo POST)
    if($_POST){
    $nombre=$_POST ['txtNombre'];
    echo "Hola ".$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <!--formulario que envia la información-->
        <form action="ejercicio2.php" method="post">
            Nombre:
            <input type="text" name="txtNombre" id="">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>