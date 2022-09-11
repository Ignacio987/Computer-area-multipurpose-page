<?php
//CONSTRUCTOR EN PHP

class persona{

    public $nombre;                                  //propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre = $nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){     //método

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

$objAlumno = new persona("Carlos segundo");         /*"new" crea un objeto a partir de un constructor, donde este consrtuctor
                                                    recibe parametros de una clase*/

$objAlumno ->imprimirNombre();                      
?>