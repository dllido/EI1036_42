<?php 
class Myclass{
    const CONST_VALUE = 10:
    var $numero=5;     
    function { 
        return $this->numero*10; 
    } 
} 
$classname = 'Myclass';
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0

echo MyClass::CONST_VALUE;
echo const CONST_VALUE = dame_numero();

$datos=new  Myclass();
$datos->numero=10;
datos->damenumero();
?>
