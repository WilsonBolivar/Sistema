<?php include ("../controlador/conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <?php include("../vista/head.php");?>
</head>
<body>
<header><?php include ("../vista/barraprivi.php");?></header>
<hr>
<div class="container">
	<div class="jumbotron">
		<div class="row">
  			<div class="col-lg-8-4">
  				<form method="POST" >
    			<div class="input-group">
      			<span class="input-group-btn">
        			<button class="btn btn-default glyphicon glyphicon-search" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" href="../controlador/bus.php" type="submit"> Buscar</button>
      			</span>
      			<input type="text" title="Ingrese solo Numeros" required="required" class="form-control" placeholder="Ingrese Cedula">
    			</div><!-- /input-group -->
    			</form>
          <div class="collapse" id="collapseExample">
              <div class="well">
                <table class="table">
                <?php $sql=mysql_query("SELECT * From repre,profecion ");?>
                  <tr>
                    <thead><h4 class="text-center">Informacion</h4></thead>
                      <td>Nombres</td>
                      <td>Apellidos</td>
                      <td>Fecha de Nacimiento</td>
                      <td>Nacionalidad</td>
                      <td>Profecion</td>
                      <td>Cargo</td>
                  </tr>
      <?php while ($row = mysql_fetch_array($sql)) {
              echo "<tr>";
              echo "<td>".$row["PriNombre"]." ".$row["SegNombre"]."</td>";
              echo "<td>".$row["PriApellido"]." ".$row["SegApellido"]."</td>";
              echo "<td>".$row["FechaNaci"]."</td>";
              echo "<td>".$row["Nacionalidad"]."</td>";
              echo "<td>".$row["Profecion"]."</td>";
              echo "<td>".$row["cargo"]."</td>";
              echo "</tr>";
            } ?>
                </table>
              </div>
            </div>
  			</div><!-- /.col-lg-8 -->
  			</div><!--/.row--> 
	</div>
</div>
<hr>
<?php include ("../vista/footer.php");?>
</body>
</html>