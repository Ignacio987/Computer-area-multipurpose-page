<?php
//FUNCION INCLUDE
//esta funcion nos permite ingresar el codigo de otro archivo php en el cual utilizamos la función
//la diferencia de include con require es que al momento de utilizar include y hacerlo mal, en la pagina se muestra un warning y se sigue
//ejecutando el resto de codigo que esta bueno, en el caso de require este deja de ejecutarse a penas ejecute el require y este este mal escrito 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio web</title>
</head>
<body>
    <?php include "ejercicio36-2.php"; ?>  <!--se llama al archivo del ejercicio 36-2, mostrando este por pantalla-->
</body>
</html>

