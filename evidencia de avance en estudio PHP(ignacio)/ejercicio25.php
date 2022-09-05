<?php
//VISIBILIDAD DE DATOS (PROPIEDADES)
//en este caso haremos lo mismo que en el ejercicio24, solo que con propiedades privadas o protected
//de las cuales solo se puede ingresar a través de las clases o funciones y no en un echo
//como se utilizan dentro de los metodos, se hace qpara que nadie mas altere los valores

class persona{

    public $nombre;                                  //propiedades
    private $edad;
    protected $altura;

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


$objAlumno = new persona();                         //"new" crea un objeto a partir de una clase
$objAlumno -> asignarNombre("Carlos");               //llama al metodo y le ingresa el nuevo nombre
$objAlumno ->imprimirNombre();                      /*imprime "Hola soy" del metodo imprimirNombre() y "Oscar" ya que esta utilizando el objeto de alumno al 
                                                    cual le asignamos un valor en la linea 30
                                                    */
echo $objAlumno -> mostrarEdad();

?>