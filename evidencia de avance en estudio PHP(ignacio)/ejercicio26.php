<?php
//HERENCIA
//hay una clase base (o clase padre/madre) y se puede crear otra clase a partir de esas caracteristicas

//clase base
class persona{

    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

// se crea un trabajador a base de la clase "persona"
class trabajador extends persona{
    public $puesto;               //propiedad nueva
    public function presentarTrabajador(){
        echo "hola soy ".$this->nombre." y tengo el puesto de ".$this->puesto;
    }
}

$objTrabajador = new trabajador();
$objTrabajador ->asignarNombre("Juan Pedro ");
$objTrabajador ->puesto="profesor";

echo $objTrabajador->presentarTrabajador();

?>