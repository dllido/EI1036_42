<?php
        //No almacena la sessión, no está configurado para Apache.
        // Initialize the session.
        // If you are using session_name("something"), don't forget it now!
        print "</p>Cookies</p>";
        print_r($_COOKIE);
        print "</p>Session</p>";
        print_r($_SESSION);
        session_start();
        print "</p>Session</p>";
        print_r($_SESSION);


        if (!isset($_SESSION["activo"]) )
    
    {   $_SESSION=array();
        setcookie(session_name(), '', time() +10);
        $_SESSION["activo"] = 1;
         print "<h2>Hola</h2>";
        $_SESSION["usuario"]="visitante";
    }
    
    else {
        if ($_SESSION['last_action'] < time() - 60 /* be a little tolerant here */) {
            session_destroy();}// destroy the session and quit

    print "<h2>Bienvenido de nuevo visitante\n</H2>";}
    print "Session";
    print_r($_SESSION);
    print "Cookies";
    print_r($_COOKIE);
    ?>
