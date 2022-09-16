<?php

if($_POST){
    $valor_a=$_POST['ValorA'];
    $valor_b=$_POST['ValorB'];

    if($valor_a>$valor_b){ //> para mayor que, >= para mayopr o igual, != para valores diferente, == para valores iguales
        echo "El valor  de a es mayor que el valor de B";
    }
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
    <form action="ejercicio9.php" method="post">
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