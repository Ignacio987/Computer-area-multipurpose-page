<?php
//ARREGLO ASOCIATIVO PHP Y LECTURA DE ARRGELOS

//Array ( [F] => fresa [PE] => peras [M] => manzana [PL] => plátano )
$frutas = array("F"=>"fresa", "PE"=>"peras", "M"=>"manzana","PL"=>"plátano");

/*EJEMPLO: Al momento de ingresar el => después de fresa, el índice deja de ser 0 y 
pasa a ser el valor anterior a este, en este caso "F", y lo mismo sucede con el resto*/

//el siguiente print_r imprime -> Array ( [F] => fresa [PE] => peras [M] => manzana [PL] => plátano )
print_r($frutas);

// el siguiente echo imprime el contenido de $frutas[1], en este caso peras
echo "<br>".$frutas["PE"]."<br>";


//nos permite la lectura del arreglo con un ciclo for
foreach($frutas as $i =>&$valor){       //$i empieza con 0; se imprimirá mientras sea menor que 3; $i aumenta su valor en 1

    echo $i."<br>";                    //imprime el indice del elemento
    echo $valor."<br>";               //imprime el valor del elemento
    echo $frutas[$i]."<br>";         // de igual manera imprme el valor del elemento (más "optima")
}

?>