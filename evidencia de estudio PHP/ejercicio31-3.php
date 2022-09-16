<?php
//VALORES DE INPUT CHECKBOX
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";    

$rdgLenguaje = "";

//cada variable recibe información de un checkbox diferente

$chekphp = "";
$chekhtml= "";
$chekcss= "";
     

if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

    $chekphp = (isset($_POST["chekphp"]) =="si" )?"checked":"";     //si el valor que recibe la variable es "si", queda seleccionada con "checked",
                                                                    //caso contrario deja la información con un espacio vacío (lo mismo poasa con 
                                                                    //las demás variables).
    $chekhtml = (isset($_POST["chekhtml"]) =="si" )?"checked":"";
    $chekcss = (isset($_POST["chekcss"]) =="si" )?"checked":"";
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

    <form action="ejercicio31-3.php" method="post">

    nombre: <br>
    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
    <br>
    ¿qué prefieres?: <br>
    <br> php : <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""> <br>   
    <br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""> <br>  
    <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""> <br>

    Estás aprendiendo.. <br>
    <!--se llamar con input:checkbox--> 
    <br> php : <input type="checkbox" <?php echo $chekphp;?>   name="chekphp" value="si" id=""> <br>
    <br> html: <input type="checkbox" <?php echo $chekhtml;?> name="chekhtml" value="si" id=""> <br>
    <br> css: <input type="checkbox" <?php echo $chekcss;?> name="chekcss" value="si" id=""> <br>

    <!--
    -checkbox nos permite seleccionar varias casillas, varias opciones, no solo una
    -echo $chekphp; nos permite guardar ese valor, a la hora de recargar la página quedará la casilla seleccionada,
    no volvera a quedar vacia a no ser que quitemos el tick
    -cada checkbox envía la información a una variable diferente
    -->

    <input type="submit" value="Enviar información">
    </form>
</body>
</html>