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
<h4 class="text-center text-uppercase">Eliminar</h4>
	  <form action="" method="GET">
	  	<fieldset>
	  	Buscar:<input type="text" name="ced">
	  	<input type= "submit" value="buscar" name="buscar">
	  </fieldset>
	  </form>
  <?php

   if(isset ($_GET["buscar"])){
   	$aux= $_GET["ced"];
   	$sql=("select * from repre where Cedula like '%$aux%' or PriNombre like '%$aux%'or SegApellido like '%$aux%'" );
   	$sql= mysqli_query($sql);
   	$num=mysql_num_rows($sql);

   	if($num>0){
   		echo '<fieldset>Dato Encontrado';

   	while($registro=mysql_fetch_array($sql)){
   		echo '<br><br> Nombre:'.$registro["PriNombre"]." ".$registro["SegNombre"] ;
       echo'<br><br> Apellido:'.$registro["apellido"]." ".$registro["SegApellido"] ;
        echo'<br><br> Cedula:'.$registro["Cedula"]; }
        echo'<p>';
#}
?>
<!--<?php
	#include("conexion.php");
	#if (isset($_GET["edit"])) {
	#	$ced=$_GET["edit"];
	#	$sql=mysql_query("select * from estudiante where Cedula='$ced'");
	#	$num=mysql_num_rows($sql);
	#	if ($num>0) {
	#		$row=mysql_fetch_array($sql);?>-->
			<body>
				<form action="../controlador/eliminar.php" method="GET">
					Cedula:<input type="text" name="cedula" value="<?php echo $registro['Cedula']; ?>">
					Nombre:<input type="text" name="Nombre" value="<?php echo $registro['PriNombre']; ?>">
					Apellido:<input type="text" name="apellido" value="<?php echo $registro['PriApellido'] ?>">
					<input type="hidden" name="id" value="<?php echo $row[0] ?>">
				<input type="submit" value="editar">
			</form>
			</body>
		<?php }else echo"error";}	?>
</div>
</div>
<hr>
<?php include ("../vista/footer.php");?>
</body>
</html>
