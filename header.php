<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Juani YA</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--- CSS -------------------->
    <link rel="stylesheet" href="stylemaster.css">

    <!--- BOOTSTRAPT ------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--- FUENTE ----------------->
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!--- FONTAWESOME ------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body>
    <!-- Header NAV BAR -->
    <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php"><img src="img/logo.png" alt="logo-juanito-ya" class="logo"></a> <!-- LOGO -->
        </div>

        <ul class="nav navbar-nav">
          <li><a href="tienda.php">Tienda</a></li>
          <li><a href="#">#JoinTheCrew</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="faq.php">FAQS</a></li>
        <?php if ($auth->estaLogueado()) : ?>
    			<li><a href="logout.php">Logout</a></li>
    			<li><a href="miPerfil.php">Mi Perfil</a></li>
      	<?php else: ?>
    			<li><a href="register.php">Register</a></li>
    			<li><a href="login.php">Login</a></li>
      	<?php endif; ?>
        </ul>

      </div>
    </nav>
