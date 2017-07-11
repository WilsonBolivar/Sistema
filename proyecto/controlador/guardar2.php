<?php
include ('Conectar.php');

//resibiendo datos por Post
$usuario = $_POST['usu'];
$contraseña = $_POST['clave'];
$nivel = $_POST['estatus'];

	//guardar en la tablas de la consulta
	$ressultado = mysqli_query($conexion,"INSERT INTO usuario values (null,'$usuario','$contraseña','$nivel')");

mysqli_close($conexion);
header("location:../modelo/registar.php");
 ?>
