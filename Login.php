<?php

	include_once("soporte.php");

  if ($auth->estaLogueado()) {
		header("Location:index.php");exit;
	}

	$errores = [];
	if ($_POST) {
		$errores = $validador->validarLogin($_POST, $db);
		if (count($errores) == 0) {
			// LOGUEAR
      $auth->loguear($_POST["email"]);
			if (isset($_POST["recordame"])) {
				//Quiere que lo recuerde
				$auth->recordame($_POST["email"]);
			}
      header("Location:index.php");
		}
	}

	include("header.php");
?>

			<div class="main">
			  <!-- formularios -->
			  <div class="row col-xs-12">
			    <h1>Iniciar sesión</h1>
			  </div>
			  <div class="row">
			      <div class="col-md-6 col-md-offset-3">
			          <form  action="login.php" method="post">
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
			                      <button type="submit" class="btn btn-default">Login</button>
			                      <a href="index.php" type="button" class="btn btn-default-2">Entrar</a>
			                  </div>
			              </fieldset>
			          </form>
			      </div>
			  </div>
			</div>
		</div>
	</body>

<?php include("footer.php"); ?>
