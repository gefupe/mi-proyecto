<?php
function saludo(){
    echo "Hola mundo";
}

saludo();

function saludoPersonalizado($nombre){
    echo "Hola " + $nombre;
}

saludoPersonalizado();
?>