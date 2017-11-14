<?php

require_once("db/pdo.php");

class Validador {
  public function validarInformacion($informacion, DB $db, $archivo) {
    $errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

    if (isset($informacion["nombre"])) {
  		if (strlen($informacion["nombre"]) <= 3) {
  			$errores["nombre"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
  		}
    }

    if (isset($informacion["email"])) {
  		if ($informacion["email"] == "") {
  			$errores["email"] = "El email debe estar completo";
  		}
  		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
  			$errores["email"] = "El email tiene que ser un email valido";
  		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
  			$errores["email"] = "El usuario ya existe!";
  		}
    }

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "No llenaste completar contraseña";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
			$errores["password"] = "Las contraseñas no coinciden";
		}

    if ($archivo["avatar"]["error"] != UPLOAD_ERR_OK)
		{
      $errores["avatar"] = "Hubo un error al cargar la imagen";
    } else {
      $nombre=$archivo["avatar"]["name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				$errores["avatar"] = "La imagen no tiene el formato adecuado";
			}
    }


		return $errores;
  }

  public function validarLogin($informacion, DB $db) {
    $errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["nombre"] == "") {
			$errores["nombre"] = "El mail esta incompleto";
		}
		// else if (filter_var($informacion["nombre"], FILTER_VALIDATE_EMAIL) == false) {
		// 	$errores["nombre"] = "El mail tiene que ser un mail";
		// } else if ($db->traerPorMail($informacion["nombre"]) == NULL) {
		// 	$errores["nombre"] = "El usuario no esta en nuestra base";
		// }

		$usuario = $db->traerPorNombre($informacion["nombre"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario !== NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		} else {  // Arreglar arriba y sacar esto     
      $errores["nombre"] = "Usuario no encontrado";
    }





		return $errores;
  }
}

 ?>
