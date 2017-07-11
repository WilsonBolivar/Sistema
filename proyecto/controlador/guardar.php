<?php
include ('Conectar.php');
  //recibiendo datos por POST Representantes
  $cedula = $_POST["cedu"];
  $nombre = $_POST["pnr"];
  $nombre2 = $_POST["snr"];
  $apellido = $_POST["par"];
  $apellido2 = $_POST["sar"];
  $Nacionalidad = $_POST["nac"];
  $fechaNaci = $_POST["fecha"];
  $Sexo = $_POST["sexo"];
  $cuenta = $_POST['cuenta'];
//datos de la tabla Direccion representante
  $esta = $_POST['estado'];
  $muni = $_POST['municipio'];
  $parro = $_POST['parroquia'];
  $vivi = $_POST['vivienda'];
  $cel = $_POST['tel'];
  $tel = $_POST['tel1'];
//datos de nivel y profesion del representante
  $nive = $_POST['nivel'];
  $car = $_POST['cargo'];
  $pro = $_POST['profesion'];
//Datos del Becado
  $cedulaB = $_POST["cedub"];
  $nombreB = $_POST["pnb"];
  $nombre2B = $_POST["snb"];
  $apellidoB = $_POST["pab"];
  $apellido2B = $_POST["sab"];
  $nivel = $_POST['nivelb'];
  $NacionalidadB = $_POST["nacb"];
  $fechaNaciB = $_POST["fechab"];
  $SexoB = $_POST["sexob"];
  // Direccion del Becado
  $estab = $_POST['estadob'];
  $munib = $_POST['minicipiob'];
  $parrob = $_POST['parroquiab'];
  $vivib = $_POST['viviendab'];
  //redes sociales del becado
  $fa = $ $_POST['fave'];
  $in = $ $_POST['ins'];
  $tw = $ $_POST['twi'];
  //Discapacidad del Becado
  $disc = $_POST['dis'];
  $dis = $_POST['tipo'];
  // Becas del Becado
  $beca = $_POST['be'];
  $dep = $_POST['dep'];
  $cul = $_POST['cul'];
  $eco = $_POST['eco'];
  $pro = $_POST['pro'];
  $com = $_POST['com'];
  $ma = $_POST['madre'];
  //consulta de ingresar los datos representante
  $consulta ="INSERT into repre (Cedula,PriNombre,SegNombre,PriApellido,SegApellido,Nacionalidad,FechaNaci,Sexo,cuentabanco)
  values('$cedula','$nombre','$nombre2','$apellido','$apellido2','$Nacionalidad','$fechaNaci','$Sexo','$cuenta')";
  // guardar la informacion en la tablas
  $resultado = $conexion->mysqli_query($consulta);
  if (!$resultado) {
  echo "<script>alert('<h1>Registro Completado</h1>')</script>";
  }else{
  echo "<script>alert('<h1>Usuario no Registrado</h1>')</script>";
  }
  //ingresar la direccion del representante
  $direccion = "INSERT into direcrepre (Estado,Municipio,Ciudad,Direccion) values ('$esta','$muni',$parro,'$vivi')";
  // guardar la informacion en la tablas
  $resultado2 = $conexion->query($direccion);
  if ($resultado2) {
  echo "<script>alert('<h1>Registro Completado</h1>')</script>";
  }else{
  echo "<script>alert('<h1>Usuario no Registrado</h1>')</script>";
  }
  //ingresar la profesion del representante
  $profe = "INSERT into profecion (nivel,profesion,cargo) values('$nive','$pro','$car')";
  // guardar la informacion en la tablas
  $resultado3 = $conexion->query($profe);
  if ($resultado3) {
  echo "<script>alert('<h1>Registro Completado</h1>')</script>";
  }else{
  echo "<script>alert('<h1>Usuario no Registrado</h1>')</script>";
  }
  //ingresar los datos del becado
  $consulta2 = "INSERT into becado (identificacion,PNomBeca,SNomBeca,PApeBeca,SApeBeca,nivel,Sexob,Nacionalidad,FechaNacimi) values ('$cedulaB','$nombreB','$nombre2B','$apellidoB','$apellido2B','$nivel','$SexoB','$NacionalidadB','$fechaNaciB')";
  // guardar la informacion en la tablas
  $resultado4 = $conexion->query($consulta2);
  if ($resultado4) {
  echo "<script>alert('<h1>Registro Completado</h1>')</script>";
  }else{
  echo "<script>alert('<h1>Usuario no Registrado</h1>')</script>";
  }

 mysql_close($conexion);
 //header("location:../modelo/registar.php");
 ?>
