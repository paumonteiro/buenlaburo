<?php

$dsn = 'mysql:host=localhost;dbname=Juanito_Ya;
charset=utf8mb4;port=8889';
$user ="root";
$pass = "root";

try {
  $db = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
  echo "La conexion a la base de datos falló: " . $e->getMessage();
}
