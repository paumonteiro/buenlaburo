<?php
session_start();

require_once("classes/auth.php");
require_once("classes/validador.php");
require_once("classes/DBMySQL.php");
require_once("classes/DBJSON.php");


$auth = new Auth();

$validador = new Validador();

$db = new DBMySQL();



?>
