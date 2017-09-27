<?php
include('helpers.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juanito Ya - FAQs</title>
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

        <!-- banner -->
        <section class="banner secciones">
          <img class="banner-foto"src="img/JuanitoYaCamperas1.jpg" alt="banner">
          <h1 class="banner-titulo">FAQs</h1>
        </section>

        <!-- preguntas y respuestas -->
        <div id="accordion" role="tablist" aria-multiselectable="true" class="col-xs-12">

          <!-- pregunta 1 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pregunta1" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Cómo devuelvo algo?
                </a>
              </h5>
            </div>
            <div id="pregunta1" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              </div>
            </div>
          </div>

          <!-- pregunta 2 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pregunta2" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Puedo cambiar mi pedido?
                </a>
              </h5>
            </div>
            <div id="pregunta2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              </div>
            </div>
          </div>

          <!-- pregunta 3 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pregunta3" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Hacen envíos a todo el país?
                </a>
              </h5>
            </div>
            <div id="pregunta3" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              </div>
            </div>
          </div>

          <!-- pregunta 4 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pregunta4" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Qué métodos de pago aceptan?
                </a>
              </h5>
            </div>
            <div id="pregunta4" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              </div>
            </div>
          </div>

          <!-- pregunta 5 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pregunta5" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Por qué mi pedido está pendiente?
                </a>
              </h5>
            </div>
            <div id="pregunta5" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
              </div>
            </div>
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
