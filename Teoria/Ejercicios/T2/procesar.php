<!DOCTYPE html>
<html>
<!--**
 * * Descripción: Procesa formulario 0
 * *
 * * 
 * * @author  Lola <dllido@uji.es>
 * * @version 1
 * *  * * -->
<head>
	<meta charset="UTF-8">
	<title>Bienvenido </title>
	<META name="Author" content="dllido">
</head>


<body>
<p>
<?php

$conf= $_REQUEST["conf"];
if ($conf="")
 foreach ($argv as $arg) {
         $e=explode("=",$arg);
        if(count($e)==2)
            $_GET[$e[0]]=$e[1];
   
  }
print "-".$conf."-</p>";
if ($conf=="S") phpinfo();
?>
</body>
</html>
