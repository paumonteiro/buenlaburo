<?php
require '../helpers.php';

define('DB_PATH', '../db/usuarios.json');

$errores = [];


//Validación
$firstname = trim($_POST['firstname']);
if (empty($firstname)) {
	$errores['firstname'] = 'El nombre es obligatorio';
}

$lastname = trim($_POST['lastname']);
if (empty($lastname)) {
	$errores['lastname'] = 'El apellido es obligatorio';
}

$nombre = trim($_POST['nombre']);
if (empty($nombre)) {
	$errores['nombre'] = 'El username es obligatorio';
}

$email = trim($_POST['email']);
if (empty($email)) {
	$errores['email'] = 'El email es obligatorio';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errores['email'] = 'El email ingresado no es válido';
}

$password = trim($_POST['password']);
if (empty($password)) {
	$errores['password'] = 'La contraseña es obligatoria';
}

$repassword = trim($_POST['repassword']);
if (empty($repassword)) {
	$errores['repassword'] = 'Reingresar contraseña';
} elseif ($repassword !== $password) {
  $errores['repassword'] = 'Las contraseñas no coinciden';
}

if (getUserByUsername($nombre, '../db/usuarios.json')) {
	$errores['nombre'] = 'El usuario ya existe en la base';
}

if (getUserByEmail($email, '../db/usuarios.json')) {
	$errores['email'] = 'El email ya existe en la base';
}

$genero = ($_POST['genero']);
if (empty($_POST['genero'])) {
	$errores['genero'] = 'El genero es obligatorio';
}

if (count($errores) > 0) {
	$_SESSION['errores'] = $errores;
	$_SESSION['inputsValues'] = $_POST;
	header('Location: ../Sign-up.php');
	exit;
}

//Crear Imagen
$imageName = uniqid();
$nombreCompleto = guardarImagen('avatar', $imageName, '../avatares/');

//Crear usuario
$usuario = [
	'firstname' => $firstname,
	'lastname' => $lastname,
	'nombre' => $nombre,
	'email' => $email,
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'genero' => $genero,
	'avatar' => $nombreCompleto
];

//Recuperar data
$usuarios = getUsers('../db/usuarios.json');

//Guardar usuario
$usuarios[] = $usuario;
$json = json_encode($usuarios);
file_put_contents(DB_PATH, $json);

function guardarImagen($inputName, $imageName, $path)
{
	if ($_FILES[$inputName]['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
		move_uploaded_file(
			$_FILES[$inputName]['tmp_name'],
			$path.$imageName.'.'.$ext
		);
		return $imageName.'.'.$ext;
	}
}

header('Location: ../exito.php');

// session_destroy();
// setcookie('posicion del cookie', 'valor del cookie', time()+tiempoquequierasennumeros);
// setcookie('posicion del cookie', '', -1);


 ?>
