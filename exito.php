<?php
include('helpers.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Juani YA - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylemaster.css">
  </head>

  <!-- Header NAV BAR -->
  <div class="container">
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php"><img src="img/logo.png" alt="logo-juanito-ya" class="logo"></a> <!-- LOGO -->
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="pagina-producto.php">Productos</a></li>
          <li><a href="#">#JoinTheCrew</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="Faq.php">FAQS</a></li>
        </ul>
        <?php if (!usuarioLogueado()): ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        <?php endif; ?>
      </div>
    </nav>

    <div class="felicitaciones alert-success">
      <strong>¡FELICITACIONES!</strong>  <a href="#" class="alert-link"></a>
      <br>
      <p> Ingresaste con exito. </p>
    </div>

<button type="button" class="btn btn-default"> <a href="index.php">Volver a la página de inicio</a></button>

  </body>



</html>
