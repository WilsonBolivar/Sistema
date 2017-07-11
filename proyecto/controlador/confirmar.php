<?php
include ("Conectar.php");

if (isset($_POST['submit'])) {
	$usu = $_POST['usu'];
	$cla = $_POST['clave'];
}
$sql=mysqli_query("SELECT * From usuario");
$row = mysqli_num_rows ($sql ,$conexion);
if (($usu == "admin") AND ($cla == "admin")){
	header("location:../modelo/registar.php");
}if (($usu == "privi") AND ($cla == "privi")) {
	header("location:../modelo/registar2.php");
}elseif (($usu == "comun") AND ($cla == "comun")) {
	header("location:../modelo/buscar.php");
}
/*if ($num>0) {
	$val = mysql_fetch_array($val);
	if ($val["Nivel"]=="Administrador") {
		header("location:../modelo/registar.php");
	}
	if ($val["Nivel"]=="Privilejiado") {
		header("location:../modelo/registar.php");
	}
	if ($val["Nivel"]=="Comun") {
		header("location:../modelo/buscar.php");	}
}*/else{
	echo "<script>alert('El Usuario no Existe o la Contraseña es Incorrecta')</script>";
	//header("location:../modelo/login.php");
}

?>
