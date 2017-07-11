<?php 
class validar{

public function _constructor(){
	$this->user = "admin";
	$this->user2 = "privi";
	$this->user3 = "comun";
	$this->usuario= $_POST['usu'];
	$this->contraseña= $_POST['clave'];
}
	
public function _verificar(){

if ( (isset($_POST['usu'])) AND (isset($_POST['clave'])) ){
		$usuario == $user ;
		$contraseña== $user;
		echo "(<script>alert('Bienvenido')</script>";
		header("location:../modelo/registar.php");
}if ((isset($_POST['usu'])) AND (isset($_POST['clave']))) {
		$usuario == $user2 ;
		$contraseña== $user2;
		echo "(<script>alert('Bienvenido')</script>";
		header("location:../modelo/modificar.php");
}if ((isset($_POST['usu'])) AND (isset($_POST['clave']))){
		$usuario == $user3;
		$contraseña == $user3;
	echo "(<script>alert('Bienvenido')</script>";
	header("location:../modelo/buscar.php");
}else{
	echo "(<script>alert('Datos erroneos')</script>";
	header("location:../modelo/login.php");
}
}
}
/*if ($resultado=mysqli_query($conexion,"SELECT id,Usuario,Contraseña,Nivel FROM usuario WHERE Usuario=='this->$usua' AND Contraseña='this->$cla'")) {
	echo "vamos bien";
}else{
	echo "Vamos mal";
}
$confi=query("SELECT id FROM usuario WHERE Usuario=='".$this->$usua."' AND Contraseña=='"$this->$cla"");
$num=$this->conexion->query($confi);
 	
 	if ($num==true) {
 		return-> echo "(<script>alert('Bienvenido')</script>".$num);
 		header("location:../modelo/resgistar.php");
 	}*/
?>