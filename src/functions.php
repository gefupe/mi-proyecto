<?php
function saludo(){
    echo "Hola mundo";
}

saludo();

function saludoPersonalizado($nombre, $edad){
    echo "Hola " + $nombre + ", ya tienes " + $edad + " años.";
}

saludoPersonalizado();
?>