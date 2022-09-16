<?php
//VALORES DE INPUT TEXT
//el objetivo es entender como se envia la información a través del formulario

$txtNombre ="";                                                          //esta variable recibe la infoprmación del texto de name="txtNombre"

if ($_POST){                                                            
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";   /*
                                                                        en este caso se utiliza un if ternario (es la instruccion de preguntar
                                                                        y reaccionar).
                                                                        isset($_POST["txtNombre"]) pone una condicional, diciendo que si hay
                                                                        información en "txtnombre" se la asinga el valor que esta después del
                                                                        signo de pregunta (en este caso $_POST["txtNombre"]), de lo contrario,
                                                                        ingresa el valor que sigue después de los dos puntos
                                                                        (en este caso "" (espacio vacío))
                                                                        */
                                                                        
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
    <?php if ($_POST){?>                                        <!--(se abre la condicional)Si hay un envío-->
    <Strong>Hola</Strong>:<?php echo $txtNombre;?>              <!--se muestra este mensaje-->                
    <?php } ?>                                                  <!--(se cierra la condicional)-->



    <form action="ejercicio31-1.php" method="post">

    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">    <!--
                                                                                    name="txtNombre" es el parametro que envia la
                                                                                    informacion a la variable de php $txtNombre.
                                                                                    
                                                                                    echo $txtNombre; guarda el valor de entrada
                                                                                    y la imprime en la barra de envío, para no perder el valor
                                                                                    -->  

    <input type="submit" value="Enviar información">

    </form>
</body>
</html>