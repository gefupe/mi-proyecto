<?php
function saludo(){
    echo "Hola mundo";
}

saludo();

function saludoPersonalizado($nombre, $apellidos){
    echo "Hola " + $nombre + " " + $apellidos;
}

saludoPersonalizado();
?>