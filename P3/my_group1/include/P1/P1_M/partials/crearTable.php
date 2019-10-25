<?php
include("./php.ini");
include(dirname(__FILE__)."/../../../wp-config.php");

function create($pdo,$table,$nombre) {
    $query = "INSERT INTO    $table (nombre)
                        VALUES ('$nombre') ";
    $pdo->exec($query);
}


function readAll($pdo,$table) {
    $query = "SELECT     * FROM        $table";
    $consult = $pdo->prepare($query);
    $consult->execute(array());
    $rows=$consult->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function creatablaUsuarios($pdo,$table){
/*CREATE TABLE cliente(
        client_id INT NOT NULL,
        name CHAR(50) NOT NULL,
        surname CHAR(50) NOT NULL,
        address CHAR(50),
        city CHAR(50),
        zip_code CHAR(5),
        foto_file VARCHAR(25),
        CONSTRAINT client_pk PRIMARY KEY(client_id)
    );
    */
    $query="CREATE TABLE IF NOT EXISTS $table (client_id INT(11) NOT NULL AUTO_INCREMENT,
             nombre VARCHAR(100), apellidos VARCHAR(100), email VARCHAR(100), dni VARCHAR(15) ,clave VARCHAR(25), foto_file VARCHAR(25),   PRIMARY KEY(client_id))";
    echo $query;
    $pdo->exec($query);
}

try {
    echo "hola";
    $table="A_cliente";
    $pdo= new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
    //creatablaUsuarios($pdo,$table);
    create($pdo,$table,'user1');
    var_dump(readAll($pdo,$table));
	//unset ($pdo);
 	} 
    catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

 ?>