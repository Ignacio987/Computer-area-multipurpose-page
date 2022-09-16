<?php
//VALORES DE TEXTAREA
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";    
$rdgLenguaje = "";
$chekphp = "";
$chekhtml= "";
$chekcss= "";
$Película = "";

$txtComentario ="";                                                                 //se almacena el texto en una variable


if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";
    $chekphp = (isset($_POST["chekphp"]) =="si" )?"checked":"";
    $chekhtml = (isset($_POST["chekhtml"]) =="si" )?"checked":"";
    $chekcss = (isset($_POST["chekcss"]) =="si" )?"checked":"";
    $Película = (isset($_POST["Película"]))?$_POST["Película"]:"";

    $txtComentario = (isset($_POST["txtComentario"]))?$_POST["txtComentario"]:"";     //si llegó un valor a la variable, mostrar esta misma
                                                                                      //en caso de que no, imprimir un valor vacío.
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
    <strong>la película que te gusta es </strong>           
    <?php echo $Película;?> <br>

    <strong>la duda que tienes es: </strong>           
    <?php echo $txtComentario;?>             <!--imprime el texto que hayamos escrito-->
    <?php } ?>                                                   

    <form action="ejercicio31-5.php" method="post">

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

    ¿Qué película te gusta? <br> 
    <select name="Película" id="">
        <option value="">[Ninguna Película]</option>
        <option value="Harry Potter" <?php echo ($Película =="Harry Potter")?"selected":""; ?> >Harry Potter</option>
        <option value="Wanted" <?php echo ($Película =="Wanted")?"selected":""; ?> >Wanted</option>
        <option value="The Invitation" <?php echo ($Película =="The Invitation")?"selected":""; ?> >The Invitation</option>
    </select> <br>

    ¿Tienes alguna duda?<!--se llama con textarea--><br>
    <textarea name="txtComentario" id="" cols="30" rows="10"><?php echo $txtComentario;?> </textarea>
    <br>
    <!--
    -textarea es un espacio en el que se puede escribir
    -echo $txtComentario; nos sirve para almacenar la opción seleccionada, al recargar la página no debería cambiar
    -->
    <br> <input type="submit" value="Enviar información">
    </form>
</body>
</html>