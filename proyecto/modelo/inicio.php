<?php include ("../controlador/Conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <?php include("../vista/head.php");?>
</head>
<body>
<header><?php include ("../vista/barra.php");?></header>
<hr>
	<div class="container">
		<div class="row"><br><br><br><br>
  			<div class="col-md-6">
  				<form action="" method="POST">
    			<div class="input-group">
      			<span class="input-group-btn">
        			<button class="btn btn-default glyphicon glyphicon-search" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" name="buscar"  type="submit"> Buscar</button>
      			</span>
      			<input type="text" title="Ingrese solo Numeros" name="ce" id="ce" required class="form-control" placeholder="Ingrese Cedula">
    			</div><!-- /input-group -->
    			</form>
          <div class="collapse" id="collapseExample">
              <div class="well">
                <table class="table">
                <?php if (isset($_GET['buscar'])) {
                  $cedu=$_POST["ce"];
                }$sql=mysqli_query("SELECT * From repre WHERE Cedula='$cedu'"); ?>
                  <tr>
                    <thead><h4 class="text-center">Informacion</h4></thead>
                      <td>Nombres</td>
                      <td>Apellidos</td>
                      <td>Fecha de Nacimiento</td>
                      <td>Sexo</td>
                  </tr>
      <?php while ($row = mysqli_fetch_array($sql)) {
              echo "<tr>";
              echo "<td>".$row["PriNombre"]." ".$row["SegNombre"]."</td>";
              echo "<td>".$row["PriApellido"]." ".$row["SegApellido"]."</td>";
              echo "<td>".$row["FechaNaci"]."</td>";
              echo "<td>".$row["Sexo"]."</td>";
              echo "</tr>";
            } ?>
                </table>
              </div>
            </div>
  			</div><!-- /.col-md-4 -->
        <div class="col-md-3"></div>
          <div class="col-md-3">
          <div class="list-group ">
            <p  class="list-group-item active">Lista de Enlazes</p>
            <a href="http://www.me.gob.ve/" class="list-group-item">Ministerio de Educacion</a>
            <a href="http://www.me.gob.ve/sistemas/coleccion_bicentenario/index.php" class="list-group-item">Coleccion Bicentinario</a>
            <a href="http://me.gob.ve/reproductor/" class="list-group-item">Radio Educativa</a>
            <a href="http://www.caracas.gob.ve/alcaldiaDeCCS/" class="list-group-item">Alcaldia de Caracas</a>
        </div>
        </div>
  			</div><!--/.row-->
        <div class="row">
          
        </div>
	</div>
<hr>
<?php include ("../vista/footer.php");?>
</body>
</html>
