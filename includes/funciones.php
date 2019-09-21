<?php
	require_once 'Medoo.php';
	require_once 'database.php';

	if ($_POST) {
		switch ($_POST["accion"]) {
			case 'login':
				login();
				break;
			
			default:
				# code...
				break;
		}
	}

	function login(){
		global $db;
		$respuesta = [];
		$usuario = $db->get("usuarios", "*", ["email_usr" => $_POST['usuario']]);
		//print_r($_POST);
		if ($usuario > 0) {
			$respuesta["texto"] = "Si existe";
			$respuesta["status"] = 1;
			//Validar que la password sea correcta
				//Si la contraseña no es correcta enviar un status 0
				//Si la contraseña es correcta entonce:
				//1. Iniciar Sesión
				//2. Setear variable session, los valores, nombre, correo, status, id y nivel
				//3. Responder status 1
		}else {
			$respuesta["texto"] = "No existe";
			$respuesta["status"] = 0;
		}
		echo json_encode($respuesta);

	}
?>