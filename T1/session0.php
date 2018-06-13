<?php
    echo '$_COOKIE';
var_dump($_COOKIE);
echo '$_SESSION';
var_dump($_SESSION);
session_start();
echo '$_SESSION';
    var_dump($_SESSION);
echo '$_COOKIE';
setcookie(session_name(), '', time() +10);
var_dump($_COOKIE);
if (!isset($_SESSION['ACTIVO']))
           {   $_SESSION = array();
        session_regenerate_id();
         $_SESSION['ACTIVO'] = 1;
       print "Bien venido visitante";
        
    }
    else
    { print "Bien venido de nuevo";}	
    
    var_dump($_SESSION);
    var_dump($_COOKIE);
    ?>
