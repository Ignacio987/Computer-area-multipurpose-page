<?php
//DESTRUIR VARIABLES DE SESSION 
//lo que hace es eliminar los datos que se ingresan en session_start
session_start();
session_destroy();

echo "se destruyó la sesión de usuario";

//para ver si se destruyó la información, validamos (EJEMPLO EN EL EJERCICIO 30-2)

?>