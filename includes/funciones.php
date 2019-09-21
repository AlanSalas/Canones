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
		if (empty($_POST['usuario']) && empty($_POST['password'])) {
			$respuesta["status"] = 5;
		}elseif ($usuario > 0) {
			//Validar password 
			//Si la contraseña no es correcta enviar un status 2
			if ($usuario["password_usr"] != $_POST['password']) {
				$respuesta["status"] = 2;
			//Si la contraseña es correcta entonces:
			//1. Iniciar Sesión
			//2. Setear variable session, los valores, nombre, correo, status, id y nivel
			//3. Responder status 3
			}elseif ($usuario["email_usr"] == $_POST["usuario"] && $usuario["password_usr"] == $_POST["password"]) {
				session_start();
				error_reporting(0);
				$_SESSION['id'] = $usuario["id_usr"];
				$_SESSION['nombre'] = $usuario["nombre_usr"];
				$_SESSION['email'] = $usuario["email_usr"];
				$_SESSION['status'] = $usuario["status_usr"];
				$_SESSION['nivel'] = $usuario["nivel_usr"];
				$respuesta["status"] = 3;
			}
		}else {
			$respuesta["status"] = 4;
		}
		echo json_encode($respuesta);
	}
?>