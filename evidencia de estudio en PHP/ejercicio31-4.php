<?php
//VALORES DE SELECT OPTION
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";    

$rdgLenguaje = "";

$chekphp = "";
$chekhtml= "";
$chekcss= "";
     

if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

    $chekphp = (isset($_POST["chekphp"]) =="si" )?"checked":"";
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
    <br> php : <input type="checkbox" <?php echo $chekphp;?>   name="chekphp" value="si" id=""> <br>
    <br> html: <input type="checkbox" <?php echo $chekhtml;?> name="chekhtml" value="si" id=""> <br>
    <br> css: <input type="checkbox" <?php echo $chekcss;?> name="chekcss" value="si" id=""> <br>

    <!--se llama con un select-->
    <input type="submit" value="Enviar información">
    </form>
</body>
</html>