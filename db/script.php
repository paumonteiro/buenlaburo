<?php

include ('pdo.php');

function getUsers ($db){
  $usuarios = [];
  if (file_exists($db))
   {
     $json = file_get_contents($db);
    $usuarios = json_decode($json,true);
  }
  return $usuarios;
}



$usuarios = getUsers ('usuarios.json');

// ahora ya tengo todos los usuarios en un array asociativo

foreach ($usuarios as $usuario){
$sql="INSERT INTO usuarios (firstname, lastname, nombre, email, password, genero, avatar) VALUES (:firstname,
 :lastname, :nombre, :email, :password, :genero, :avatar)";

$query=$db->prepare($sql);

$query->bindValue(":firstname", $usuario["firstname"]);
$query->bindValue(":lastname", $usuario["lastname"]);
$query->bindValue(":nombre", $usuario["nombre"]);
$query->bindValue(":email", $usuario["email"]);
$query->bindValue(":password", $usuario["password"]);
$query->bindValue(":genero", $usuario["genero"]);
$query->bindValue(":avatar", $usuario["avatar"]);

$query->execute();

}

$db=null;
