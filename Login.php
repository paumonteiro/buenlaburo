<?php
include('helpers.php');


if ($_POST) {
  $logueo = getUserByUsername($_POST["nombre"], 'db/usuarios.json');

  if ($logueo !== false) {
    if (password_verify($_POST["password"], $logueo["password"]) == true) {
      $_SESSION["nombre"] = $logueo["nombre"];

      if (isset($_POST["recordar"])) {
        setcookie("nombre", $_SESSION["nombre"], time()+60*60*24);
      }
    }
  } else {
    $errores["nombre"] = "No se encuentra el usuario";
  }
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juanito Ya - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
    <link rel="stylesheet" href="stylemaster.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <!-- Header NAV BAR -->
    <div class="container">
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php"><img src="img/logo.png" alt="logo-juanito-ya" class="logo"></a> <!-- LOGO -->
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Productos</a></li>
              <li><a href="#">#JoinTheCrew</a></li>
              <li><a href="#">Contacto</a></li>
              <li><a href="Faq.php">FAQS</a></li>
            </ul>
            <?php if (!usuarioLogueado()): ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <?php else:  ?>
              <li id="btn-logout"><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
          <?php endif; ?>
          </div>
        </nav>

      <div class="main">
        <!-- formularios -->
        <div class="row col-xs-12">
          <h1>Iniciar sesión</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form  action="Login.php" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="nombre">Usuario:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="" />
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña: </label><br/>
                            <input type="password" class="form-control" name="password" id="password" value="" />
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="recordar" id="recordar"> Recordar usuario</label><br>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Enviar</button>
                            <a href="Sign-up.php" type="button" class="btn btn-default-2">Crear cuenta</a>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>

      </div>


      <!-- footer -->
      <footer class="main-footer col-xs-12">
        <div class="container">
          <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php"><img src="img/logo.png" alt="logo-juanito-ya" class="logo"></a> <!-- LOGO -->
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Productos</a></li>
                  <li><a href="#">#JoinTheCrew</a></li>
                  <li><a href="#">Contacto</a></li>
                  <li><a href="Faq.php">FAQS</a></li>
                </ul>
              </div>
            </nav>
  		</footer>

    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
