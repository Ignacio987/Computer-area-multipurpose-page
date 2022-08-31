<?php
//ARREGLO ASOCIATIVO PHP

//Array ( [F] => fresa [PE] => peras [M] => manzana [PL] => plátano )
$frutas = array("F"=>"fresa", "PE"=>"peras", "M"=>"manzana","PL"=>"plátano");

/*EJEMPLO: Al momento de ingresar el => después de fresa, el índice deja de ser 0 y 
pasa a ser el valor anterior a este, en este caso "F", y lo mismo sucede con el resto*/

//el siguiente print_r imprime -> Array ( [F] => fresa [PE] => peras [M] => manzana [PL] => plátano )
print_r($frutas);



?>