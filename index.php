<?php
include('helpers.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Juani YA - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylemaster.css">
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
          <?php else:  ?>
            <li id="btn-logout"><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <?php endif; ?>
        </div>
      </nav>
      <!-- CAROUSEL O SLIDER -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"> <!-- SLIDER IMG -->
          <div class="item active"> <!-- Imagen 1 -->
            <img src="img/slider-1.jpg" alt="Chania">
            <div class="carousel-caption">
              <h2 class="titulo">Camperas Impermeables</h2>
              <p class="subtitulo"> La moda es sobre vestir de acuerdo a lo que esta de moda. El estilo es más sobre ser tú mismo</p>
              <h4 class="cita"> Oscar de la Renta</h4>
            </div>
          </div>
          <div class="item"> <!-- Imagen 2 -->
            <img src="img/slider1.jpg" alt="Chicago">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item"> <!-- Imagen 3 -->
            <img src="img/slider2.jpg" alt="New York">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <!-- Left and right controls -->
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- PARTE PRINCIPAL DIVIDIDA EN 2 (IZQ & DER) -->
      <main class="main-body">
          <h1>
          <strong class="nuevas-camperas">Nuevas camperas Old-school</strong>
          </h1>
          <hr class="linea-main">
        <div class="row">
          <div class="box-producto col-md-4">
            <img src="img/box-producto1.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
          <div class="box-producto col-md-4">
            <img src="img/box-producto2.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
          <div class="box-producto col-md-4">
            <img src="img/box-producto3.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
        </div>
        <div class="row"> <!--segunda fila -->
          <div class="box-producto col-md-4">
            <img src="img/box-producto5.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
          <div class="box-producto col-md-4">
            <img src="img/box-producto4.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
          <div class="box-producto col-md-4">
            <img src="img/box-producto6.jpg" alt="foto-izq" class="imagen">
            <h2 class="titulo"> Lorem Ipsum </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante tortor, condimentum ac consequat nec, iaculis laoreet purus.</p>
            <button type="button" name="button">Ver más</button>
          </div>
        </div>
      </main>
      <!-- FOOTER -->
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
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
