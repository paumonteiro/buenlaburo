<?php
session_start();
function getUsers ($pathDB)
{
	$usuarios = [];
	if (file_exists($pathDB)) {
		$json = file_get_contents($pathDB);
		$usuarios = json_decode($json, true);
	}
	return $usuarios;
}

function getUserByEmail ($email, $pathDB)
{
	$usuarios = getUsers($pathDB);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['email'] == $email){
			$usuario = $usuarios[$i];
			break;
		}
	}
	return $usuario;
}

function getUserByUsername ($nombre, $pathDB)
{
	$usuarios = getUsers($pathDB);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['nombre'] == $nombre){
			$usuario = $usuarios[$i];
			break;
		}
	}
	return $usuario;
}

function usuarioLogueado() {
	if (isset($_SESSION["nombre"])) {
		return true;
	} else {
		return false;
	}
}

if (!isset($_SESSION["nombre"]) && isset($_COOKIE["nombre"])) {
  $_SESSION["nombre"] = $_COOKIE["nombre"];
}
