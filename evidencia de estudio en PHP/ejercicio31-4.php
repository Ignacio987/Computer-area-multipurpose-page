<?php
//VALORES DE SELECT OPTION
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";    
$rdgLenguaje = "";
$chekphp = "";
$chekhtml= "";
$chekcss= "";
     
$Película = "";   //se crea la variable donde se almacenará el valor de select


if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";
    $chekphp = (isset($_POST["chekphp"]) =="si" )?"checked":"";
    $chekhtml = (isset($_POST["chekhtml"]) =="si" )?"checked":"";
    $chekcss = (isset($_POST["chekcss"]) =="si" )?"checked":"";

    $Película = (isset($_POST["Película"]))?$_POST["Película"]:""; //condicion que guarda el valor de película y lo muestra, en caso de no
                                                                   //recibir valor deja un espacio en blanco y sin información
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
    <Strong> y tu opción preferida es </Strong><?php echo $rdgLenguaje;?> <br> 
    <Strong> estás aprendiendo </Strong>
    <?php echo ($chekphp=="checked")?"php":"";?>       
    <?php echo ($chekhtml=="checked")?"html":"";?> 
    <?php echo ($chekcss=="checked")?"css":"";?> <br>

    <strong>la película que te gusta es </strong>           <!--imprime el valor de Select que hayamos elegido-->
    <?php echo $Película;?> 
    <?php } ?>                                                   

    <form action="ejercicio31-4.php" method="post">

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

    ¿Qué película te gusta?<!--se llama con un select--> <br> 
    <select name="Película" id="">
        <option value="">[Ninguna Película]</option>
        <option value="Harry Potter" <?php echo ($Película =="Harry Potter")?"selected":""; ?> >Harry Potter</option>
        <option value="Wanted" <?php echo ($Película =="Wanted")?"selected":""; ?> >Wanted</option>
        <option value="The Invitation" <?php echo ($Película =="The Invitation")?"selected":""; ?> >The Invitation</option>
    </select> <br>
    <!--
    -select es una barra de la que se despliegan opciones, se puede elegir una de ellas
    -echo ($Película =="Wd")?"selected":""; nos sirve para almacenar la opción seleccionada, al recargar la página no debería cambiar
    -->
 
    <br> <input type="submit" value="Enviar información">
    </form>
</body>
</html>