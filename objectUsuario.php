<?php

include_once('Usuario.php');

//Creamos el objeto con los valores que se define con el constructor.
$usuario = new Usuario('Fernando', 'gaitan ', );

//mostramos porr panttalla los valores.
echo $usuario->logear(); 
unset($usuario);