<?php
function saludo(){
    echo "Hola mundo";
}

saludo();

function saludoPersonalizado($nombre, $edad){
    echo "Hola " + $nombre + ", ya tienes " + $edad + " años.";
}
function saludoPersonalizado2($nombre, $apellidos){
    echo "Hola " + $nombre + " " + $apellidos;
}

saludoPersonalizado();
saludoPersonalizado2();
?>