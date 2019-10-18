<?php

function decir ($algo) {
  echo $algo(),"<p>";
}

decir(function(){
  return "Esto es algo";
});


$colorCoche = 'rojo';
#use https://www.php.net/manual/es/language.namespaces.importing.php
#apodar o importar nombre global. 
$mostrarColor = function() use ($colorCoche) {
    $colorCoche = 'azul';
    echo $colorCoche,"<p>";
};

$mostrarColor();
echo $colorCoche; // Mostrará rojo
?>
