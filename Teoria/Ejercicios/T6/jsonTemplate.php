<?php
	
	include(dirname(__FILE__)."/../../wp-config.php");
	$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
	$action="listar";
	if (isset($_REQUEST['action']) ){
		$action=$_REQUEST["action"];}
		switch ($action) {
			case "listar":
				header('Content-type: application/json');
				$result = $pdo->prepare("SELECT * FROM A_GrupoCliente");
				$result->execute();
				$datos = $result->fetchAll(PDO::FETCH_ASSOC);
				echo json_encode($salida);
				break;
			default:
				require_once('listarTemplate.html');
		
	}

	
?>
