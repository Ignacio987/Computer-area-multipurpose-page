<?php
//VALORES DE INPUT RADIO
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";                                                          
$rdgLenguaje = ""; //Variable que recibe la información de input radio

if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:""; /*en caso de recibir el valor del input radio, devolver este mismo,
                                                                        caso contrario devuelve un valor vacío*/
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if ($_POST){?>                                    
    <Strong>tu nombre es </Strong>:<?php echo $txtNombre;?> <br>  
    <Strong> y tu opción preferida es </Strong><?php echo $rdgLenguaje;?>                     
    <?php } ?>                                                  

    <form action="ejercicio31-2.php" method="post">

    nombre: <br>
    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
    <br>
    ¿qué prefieres?: <br>
    <!--se llama con input:radio-->
     
    <br> php : <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""> <br>   
    <br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""> <br>  
    <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""> <br>
    <!--
    -el input de tipo radio nos permite seleccionar UNA opción de varias.
    -para distinguir una opción de otra se utiliza "Value".
    -echo ($rdgLenguaje=="php")?"checked":""; (condicion que si en $rdgLenguaje recibe el valor de "php" devuelve un checked,
    caso contrario devuelve un valor vacío).    
    -->
    <input type="submit" value="Enviar información">
    </form>
</body>
</html>