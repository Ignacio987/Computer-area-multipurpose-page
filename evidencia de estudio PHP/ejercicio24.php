<?php
//CLASES EN PHP (POO)

class persona{

    public $nombre;                                  //propiedad

    public function asignarNombre($nuevoNombre){     //método

        $this->nombre = $nuevoNombre;

    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
} 


$objAlumno = new persona();                         //"new" crea un objeto a partir de una clase
$objAlumno -> asignarNombre("Carlos");               //llama al metodo y le ingresa el nuevo nombre

$objAlumno2 = new persona();                        //crea un nuevo onjeto a partir de la misma clase
$objAlumno2 -> asignarNombre("José");
$objAlumno ->imprimirNombre();                      //imprime Hola soy "Oscar" ya que esta utilizando el objeto de "alumno" al cual lñe asignamos un valor en $nombre

echo $objAlumno ->nombre;                           //imprime el $nombre de Alumno
echo $objAlumno2 -> nombre;                         //imprime el $nombre de Alumno2

?>