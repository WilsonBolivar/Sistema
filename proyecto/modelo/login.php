<?php include ("../controlador/Conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
  <?php include("../vista/head.php");?>
</head>
<body>
<header><?php include ("../vista/barra.php");?></header>
<hr>
	<div class="container">
	<div class="row">
	<div class="col-md-4">
	<div class="jumbotron">
		<form method="POST" class="form-inline" action="../controlador/confirmar.php">
			<div class="form-signin">
				<h2 class=" form-signin-heading">Inicia Sesion</h2>
				<input type="text" class="form-control" name="usu" required id="usu" placeholder="Usuario"> <br><br>
				<input type="password" class="form-control" name="clave" required id="clave" placeholder="Contraseña"><br><br>
				<input type="submit"  class="btn btn-success" name="submit" id="entrar" value="Entrar">
			</div>
		</form>
	</div><!--jumbotron-->
	</div><!-- col-md-4-->
	</div><!--row-->
	</div><!--container-->	
<hr>
<?php include ("../vista/footer.php");?>
</body>
</html>
