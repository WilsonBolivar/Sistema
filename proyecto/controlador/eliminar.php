<?php include("Conectar.php"); 

$id=$_GET["id"];


foreach($_GET as $campo=>$valor){

$$campo=$valor;

}
mysql_query("Delete from estudiante where id='$id'");

header("location:consulta.php");







 ?>