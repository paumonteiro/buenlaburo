<?php
include('helpers.php');
include("header.php");
?>
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
    </div>
  </body>

<!-- FOOTER -->
<?php include("footer.php"); ?>
