<?php

require_once("db.php");


class Auth {

  public function __construct() {

  	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
  		$_SESSION["logueado"] = $_COOKIE["logueado"];
  	}
  }

  public function loguear($nombre) {
    $_SESSION["logueado"] = $nombre;
  }

  public static function estaLogueado() {
    return isset($_SESSION["logueado"]);
  }

  public function usuarioLogueado(DB $db) {
    if ($this->estaLogueado()) {
      $nombre = $_SESSION["logueado"];
      return $db->traerPorNombre($nombre);
    } else {
      return NULL;
    }
  }

  public function recordame($email) {
    setcookie("logueado", $email, time() + 3600 * 2);
  }

  public function logout() {
    session_destroy();
		setcookie("logueado", "", -1);
  }
}


?>
