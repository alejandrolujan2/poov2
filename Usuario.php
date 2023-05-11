<?php

class Usuario{
    public $nombre;
    public $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;

    }
    public function saludar(){
        return 'hola, soy ' . $this->nombre . ' ' . $this->apellido . 'y tengo' . $this->edad . 'años';
    }
}