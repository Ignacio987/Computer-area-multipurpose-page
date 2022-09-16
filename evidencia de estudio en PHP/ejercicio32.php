<?php
//VALORES INPUT FILE
//se ha hecho un ejercicio diferete a los de 31, ya que la entrada de archivos funciona algo diferente

if($_POST){
    print_r($_POST);                                /*
                                                    este $_POST solo recibe el botón de envío
                                                     */
    print_r($_FILES ["archivo"]["name"]);            /*
                                                    para recibir la información de un archivo ya no se usa $_POST, se utiliza $_FILES.
                                                    se recibe la información con el nombre del input(en este caso "archivo"), y la propiedad
                                                    a la que se quiere acceder(en este caso el nombre/name)
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
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post"> <!--IMPORTANTE: para los archivos se debe escribir
                                                                                    enctype="multipart/form-data" en el apartado del formulario-->
        Imagen: <!--no solo se utiliza para mandar imagenes, sino que también otros tipo de archivos-->
        <input type="file" name="archivo" id="">
        <br>
        <input type="submit" name="enviar" value="Enviar información">
</form>
</body>
</html>