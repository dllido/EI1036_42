class Myclass{

const CONST_VALUE = 10;
public $numero=5;
function dameNumero(){
  return self::CONST_VALUE*$this->numero;
}
function llamoDame(){ return self::dameNumero();}
}
$classname = 'Myclass';
echo $classname::CONST_VALUE,"</p>"; // A partir de PHP 5.3.0
echo Myclass::CONST_VALUE,"</p>";


$datos=new  Myclass();
$datos->numero=15;
echo $datos->dameNumero(),"</p>";
echo $datos->llamoDame(),"</p>";

//Da error
echo Myclass::dameNumero();
?>