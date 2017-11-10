<?php
include('soporte.php');
require_once("classes/usuario.php");



	if ($auth->estaLogueado()) {
		header("Location:inicio.php");exit;
	}

	$firstnameDefault = "";
	$lastnameDefault = "";
	$nombreDefault = "";
	$emailDefault = "";

  $errores = [];
	if ($_POST) {

		$errores = $validador->validarInformacion($_POST, $db, $_FILES);

    if (!isset($errores["firstname"])) {
      $firstnameDefault = $_POST["firstname"];
    }

    if (!isset($errores["lastname"])) {
      $lastnameDefault = $_POST["lastname"];
    }

		if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}


		if (!isset($errores["nombre"])) {
			$nombreDefault = $_POST["nombre"];
		}

		if (!isset($error["genero"])) {
			$generoDefault = $_POST["genero"];
		}

		if (count($errores) == 0) {
			$usuario = new Usuario($_POST);
			$mail = $_POST["email"];

			$usuario->guardarImagen($_FILES);
			$usuario = $db->guardarUsuario($usuario);

			header("Location:perfilUsuario.php?mail=$mail");exit;
		}
	}

	include("header.php");
?>

<body>
  <div class="main">
    <!-- formularios -->
    <div class="row col-xs-12">
      <h1>Crear cuenta</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <ul class="errores">
          <?php foreach ($errores as $error) : ?>
            <li>
              <?=$error?>
            </li>
          <?php endforeach; ?>
          </ul>



          <form  action="register.php" method="post" enctype="multipart/form-data">
            <fieldset>

                <div class="form-group">
                    <label for="firstname">Nombre</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" value="<?=$firstnameDefault?>"/>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?=$lastnameDefault?>"/>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="nombre">Username</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$nombreDefault?>"/>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?=$emailDefault?>"/>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
          				<label for="password">Password</label>
          				<input id="password" class="form-control" type="password" name="password">
          			</div>
          			<div class="form-group">
          				<label for="cpassword">Confirmar Password</label>
          				<input id="cpassword" class="form-control" type="password" name="cpassword">
          			</div>

                <div class="form-group">
                    <label for="genero">Genero: </label><br/>

                    <input type=radio class="genero" name="genero" id="hombre" value="Hombre"/>
                    <label for="hombre">Hombre</label>

                    <input type=radio class="genero" name="genero" id="mujer" value="Mujer" />
                    <label for="mujer">Mujer</label>

                    <input type=radio class="genero" name="genero" id="otros" value="Otros" />
                    <label for="otros">Otros</label>

                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="avatar">Foto de perfil: </label><br/>
                    <input type="file" class="form-control" name="avatar" id="avatar" />
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </fieldset>
          </form>
        </div>
    </div>
  </div>

  <!-- footer -->
  <?php include("footer.php"); ?>
