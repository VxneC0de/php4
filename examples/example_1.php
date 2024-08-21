<?php
// FIRST EXAMPLE - POO
// public - el atributo PUBLIC puede ser manipulaado por cualquier otra clase fuera de su clase principal
// private - solo funciona dentro de su misma clase
// protect - solamente recibe dtos de la herencia

class Coche {
    public $color;
    public $marca;
    public $modelo;

    public function arrancar() {
        echo "El coche está arrancando.";
    }
}

// Crear un objeto de la clase Coche
$miCoche = new Coche();
$miCoche->color = "rojo";
$miCoche->marca = "Toyota";
$miCoche->modelo = "Corolla";

$miCoche->arrancar();

?>