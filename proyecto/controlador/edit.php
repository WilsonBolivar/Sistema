<?php include("Conectar.php"); ?>


<?php 


foreach($_GET as $campo=>$valor){

$$campo=$valor;

}
mysql_query("update repre set Cedula='$cedula',PriNombre='$nombre',PriApellido='$apellido',SegNombre='$nombre2',SegApellido='$apellido2',cuentabanco='$cuenta' where id='$id'");

	header("location:consulta.php");
