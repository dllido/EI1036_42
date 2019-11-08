<?php

include(dirname(__FILE__)."/../../../wp-config.php");

function handler($table)
{
    $datos = $_REQUEST;
    if (count($_REQUEST) < 4) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (nombre, apellido, email, clave)
                        VALUES ('" . $_REQUEST['nombre'] . "', '" . $_REQUEST['apellido'] . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['clave'] . "') ";
    echo $query;
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);

        $pdo->exec($query);
        var_dump($_POST);
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "A_Cliente";
include(dirname(__FILE__)."/../partials/header.php");
include(dirname(__FILE__)."/../partials/menu.php");
handler( $table);
include(dirname(__FILE__)."/../partials/footer.php");
?>