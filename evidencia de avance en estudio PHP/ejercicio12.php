<?php
 //OPERADORES LÓGICOS
 /*
 and o && = y 
 or o || = o
 xor = true si a o b es true, false en caso contrario
 not o ! = distinto de
 */
    if($_POST){
        $valor_a=$_POST['ValorA'];
        $valor_b=$_POST['ValorB'];

        if($valor_a > $valor_b){
            echo "a es mayor a b";
        
        }elseif($valor_a < $valor_b){
            echo "b es mayor a a";
        }else{
            echo "los valores son iguales";

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
    <form action="ejercicio12.php" method="post">
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