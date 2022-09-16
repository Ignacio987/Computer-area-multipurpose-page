<?php
//GUARDAR ARCHIVO (FUNCIÓN)
//se deben tener activados los permisos de lectura y escritura

if($_POST){
    print_r($_POST);                                
    print_r($_FILES ["archivo"]["name"]);

    move_uploaded_file($_FILES ["archivo"]["tmp_name"],$_FILES ["archivo"]["name"]); /*
                                                                                    esta funcion los permite recibir el archivo y copiarlo para
                                                                                    respaldarlo, primero se escribe el archivo recibido con "tmp"
                                                                                    ya que es su nombre temporal y después de la coma se escribe
                                                                                    el nombre como se tenía antes, esto copia ese archivo en
                                                                                    la misma carpeta en la que se esta ejecutando (en este caso el
                                                                                    archivo copiado está con nombre 4.jpg).
                                                                                    en caso de tener una carpeta diferente, se debe copiar y pegar
                                                                                    la ruta después de la coma. 
                                                                                    */
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
    <form action="ejercicio32-2.php" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br>
        <input type="submit" name="enviar" value="Enviar información">
</form>
</body>
</html>