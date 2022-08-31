<?php
//OPERADORES ARITMÉTICOS
if($_POST){
    $valor_a=$_POST['ValorA'];
    $valor_b=$_POST['ValorB'];
    //suma entre valores anteriores
    $suma=$valor_a+$valor_b; //- para resta, * para multiplicación y / para división

    echo "la suma entre ambos valores es de: ".$suma;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES ARITMETICOS</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        INGRESE EL VALOR A
        <input type="text" name="ValorA" id="">
        <br>
        INGRESE EL VALOR B
        <input type="text" name="ValorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>