<?php
require '../helpers.php';
require '../db/pdo.php';


define('DB_PATH', '../db/pdo.php');

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

guardarUsuario($usuario);
//Recuperar data
//$usuarios = getUsers('../db/pdo.php');

//Guardar usuario
/*$usuarios[] = $usuario;
$json = json_encode($usuarios);
file_put_contents(DB_PATH, $json);*/

function guardarUsuario($usuario) {
	global $db;
	$query = $db->prepare("Insert into usuarios values(default, :firstname, :lastname,:nombre,:email, :password, :genero, :avatar)");
	//var_dump($usuario);

	$query->bindValue(":firstname", $usuario["firstname"]);
	$query->bindValue(":lastname", $usuario["lastname"]);
	$query->bindValue(":nombre", $usuario["nombre"]);
	$query->bindValue(":email", $usuario["email"]);
	$query->bindValue(":password", $usuario["password"]);
	$query->bindValue(":genero", $usuario["genero"]);
	$query->bindValue(":avatar", $usuario["avatar"]);

	$id = $db->lastInsertId();
	$usuario["id"] = $id;

		//var_dump($query);
		//exit;
	$query->execute();

	return $usuario;

}

function traerTodos() {
	global $db;

	$query = $db->prepare("Select * from usuarios");
	$query->execute();

	return $query->fetchAll();
}

function traerPorMail($email) {
	global $db;

	$query = $db->prepare("Select * from usuarios where email = :email");
	$query->bindValue(":email", $email);

	$query->execute();

	return $query->fetch();
}


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

/* iniciar session */
$_SESSION["nombre"] = $nombre;

header('Location: ../index.php');

setcookie('nombre', $nombre, time()+3600);


// session_destroy();
// setcookie('posicion del cookie', 'valor del cookie', time()+tiempoquequierasennumeros);
// setcookie('posicion del cookie', '', -1);


 ?>
