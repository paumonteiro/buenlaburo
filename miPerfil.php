<?php
include('soporte.php');
include("header.php");


  $usuarioLogueado = $auth->usuarioLogueado($db);
  $nombre = $usuarioLogueado->getNombre();

?>


  <h1>Bienvenido</h1>
  <h2><?=$nombre?> a tu perfil</h2>


</div>
</body>
<!-- FOOTER -->
<?php include("footer.php"); ?>
