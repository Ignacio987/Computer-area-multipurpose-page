<?php
//ARREGLO DE ÍNDICE NUMÉRICO Y LECTURA DE ARREGLOS

// Array ( [0] => fresa [1] => peras [2] => manzana [3] => plátano )
$frutas = array("fresa", "peras", "manzana", "plátano");
//imprime Array ( [0] => fresa [1] => peras [2] => manzana [3] => plátano )
print_r($frutas);

// el siguiente echo imprime el contenido de $frutas[1], en este caso peras
echo "<br>".$frutas[1];

//nos permite la lectura del arreglo con un ciclo for
for($i = 0 ; $i<3 ;$i++ ){       //$i empieza con 0; se imprimirá mientras sea menor que 3; $i aumenta su valor en 1

    echo $frutas[$i]."<br>";    //se llama al array $frutas y se le indica el ciclo, el cual muestra la posición de $i con un salto de linea

}

?>