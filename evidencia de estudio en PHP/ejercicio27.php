<?php
//METODOS ESTÁTICOS PHP (pueden llamarse sin tener una instancia)

class UnaClase{
    public static function unMetodo(){
        echo "Hola soy un Método estático"."<br>" ;
    }
}

$obj = new UnaClase();
$obj -> unMetodo();

Unaclase::unMetodo(); //es lo mismo que lo de la linea 10 y 11, solo que mas resumido
?>