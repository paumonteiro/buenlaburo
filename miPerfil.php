<?php
include('soporte.php');

  if (!$auth->estaLogueado()) {
    header("Location:index.php");exit;
  }

  $usuarioLogueado = $auth->usuarioLogueado($db);

  $nombre = $usuarioLogueado->getNombre();

  include("header.php");
?>


  <h1>Inicio</h1>
  <h2>Bienvenido <?=$nombre?> a tu perfil</h2>


</div>
</body>
<!-- FOOTER -->
<?php include("footer.php"); ?>
