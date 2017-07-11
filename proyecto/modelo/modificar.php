<?php include ("../controlador/Conectar.php");
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../vista/head.php");?>
</head>
<body>
<header>
	<?php include ("../vista/barraadmin.php");?>
</header>
<hr>
<div class="container">
<div class="jumbotron">
<h4 class="text-uppercase text-center">modificar</h4>
<div class="row">
  			<div class="col-lg-8-4">
  				<form method="POST" >
    			<div class="input-group">
      			<span class="input-group-btn">
        			<button class="btn btn-default glyphicon glyphicon-search" href="../controlador/bus.php" type="submit"> Buscar</button>
      			</span>
      			<input type="text" title="Ingrese solo Numeros" required="required" class="form-control" placeholder="Ingrese Cedula">
    			</div><!-- /input-group -->
    			</form>
  			</div><!-- /.col-lg-8 -->
  			</div><!--/.row--> 
<form method="POST">
		<table class="table"><hr>
			<tbody class="text-center">
				<tr>
					<td>Nombre</td>
					<td>Segundo Nombre</td>
					<td>Apellido</td>
					<td>Segundo Apellido</td>
					<td>Identificacion</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>		
	</table>
</form></div>
</div>



<hr>
<?php include ("../vista/footer.php");?>
</body>
</html>