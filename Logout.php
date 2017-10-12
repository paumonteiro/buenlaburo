<?php
session_start();
session_destroy();

unset($_COOKIE['nombre']);
setcookie('nombre', false, 10);

header('Location: index.php');
 ?>
