<?php

class ClaseA
{
    public $prueba = "Esto es una propiedad";
    
    public function prueba() {
        return "Esto es un método";
    }
}

$a = new ClaseA;
echo $a->prueba ; // Devuelve: Esto es una propiedad
echo $a->prueba(); // Devuelve: Esto es un método

  

