<?php
include ('Conectar.php');

//resibiendo datos por Post
$usuario = $_POST['usu'];
$contraseña = $_POST['clave'];
$nivel = $_POST['estatus'];

	//Consulta para guardar
	$insert = "INSERT INTO usuario (Usuario,Contraseña,Nivel) values ('$usuario','$contraseña','$nivel')";
	//guardar en la tablas de la consulta
	$ressultado = mysqli_query($insert);
	echo "Registro Completado";
if (!$resultado) {
	echo "Usuario no Registrado";
}

mysqli_close($conexion);
//header("location:../modelo/registar.php");
 ?>
