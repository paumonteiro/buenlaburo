<?php

require_once("db.php");
require_once("usuario.php");

class DBMySQL extends DB {
  private $db;

  public function __construct() {
    $dsn = 'mysql:host=localhost;dbname=Juanito_Ya;
    charset=utf8mb4;port=8889';
    $user ="root";
    $pass = "root";

    try {
      $this->db = new PDO($dsn, $user, $pass);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }

  }

  public function guardarUsuario(Usuario $usuario) {

		$query = $this->db->prepare("Insert into usuarios values(default, :firstname, :lastname, :nombre, :email, :password,:genero,:avatar)");


    $query->bindValue(":firstname", $usuario->getFirstname());
    $query->bindValue(":lastname", $usuario->getLastname());
    $query->bindValue(":nombre", $usuario->getNombre());
    $query->bindValue(":email", $usuario->getEmail());
		$query->bindValue(":password", $usuario->getPassword());
		$query->bindValue(":genero", $usuario->getGenero());
		$query->bindValue(":avatar", $usuario->getAvatar());

		$id = $this->db->lastInsertId();

		$usuario->setId($id);


		$query->execute();

		return $usuario;





  }

  public function traerTodos() {
		$query = $this->db->prepare("Select * from usuarios");
		$query->execute();

    $arrayFinal = [];

		$usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      $arrayFinal[] = new Usuario($usuario);
    }

    return $arrayFinal;
  }
  public function traerPorMail($email) {
		$query = $this->db->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuario = $query->fetch();

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }
  }
}

?>
