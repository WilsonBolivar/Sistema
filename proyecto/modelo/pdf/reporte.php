<?php 
require('force_justify.php');
$link = mysqli_connect("localhost","root","","sistema");
if (mysqli_connect_errno()) {
	printf("conexion fallida %s\n",mysqli_connect_error());
	exit();
}
$PDF= new PDF();
$PDF-> AddPage();
$PDF-> SetFont('times','B',12);
$PDF-> cMargin=1;
$PDF->image('logo.jpg',10, 10, 50 , 60,'JPG');
$PDF->Cell(130,60,"Republica Bolivariana de Venezuela",0,'C',0);
$PDF->Cell(12,80,"Ministerio Del Poder Popular para la Educacion",0,'C',0);
$PDF->image('logo.jpg',155, 10, 50 , 60,'JPG');
$PDF->Ln();
$PDF->Cell(138,20,"Informacion de los Registrados Representante",0,'C',0);
$PDF->Ln();
$PDF->Cell(25,10,"Cedula",1,'C');
$PDF->Cell(40,10,"Nombres",1,'C');
$PDF->Cell(40,10,"Apellidos",1,'C');
$PDF->Cell(10,10,"Sexo",1,'C');
$PDF->Cell(35,10,"Nacimiento",1,'C');
$PDF->Cell(30,10,"Nacinalidad",1,'C');
$PDF->Ln();
if ($consulta = mysqli_query($link,"SELECT * From repre")) {
	while ( $tsArray = mysqli_fetch_assoc($consulta) ) {
	$PDF-> SetFont('Arial','',12);
	$PDF-> Cell(25,10,$tsArray["Cedula"],1,'C');
	$PDF-> Cell(40,10,$tsArray["PriNombre"]." ".$tsArray["SegNombre"],1,'C');
	$PDF-> Cell(40,10,$tsArray["PriApellido"]." ".$tsArray["SegApellido"],1,'C');
	$PDF-> Cell(10,10,$tsArray["Sexo"],1,'C');
	$PDF-> Cell(35,10,$tsArray["FechaNaci"],1,'C');
	$PDF-> Cell(30,10,$tsArray["Nacionalidad"],1,'C');
	$PDF->Ln();
}
}
$PDF-> SetFont('times','B',12);
$PDF->Cell(130,20,"Informacion de los Registrados Becados",0,'C',0);
$PDF->Ln();
$PDF->Cell(25,10,"Cedula",1,'C');
$PDF->Cell(40,10,"Nombres",1,'C');
$PDF->Cell(40,10,"Apellidos",1,'C');
$PDF->Cell(10,10,"Sexo",1,'C');
$PDF->Cell(35,10,"Nacimiento",1,'C');
$PDF->Cell(30,10,"Nacinalidad",1,'C');

$PDF->Ln();
if ($consulta = mysqli_query($link,"SELECT * From becado")) {
	while ( $tsArray = mysqli_fetch_assoc($consulta) ) {
	$PDF-> SetFont('Arial','',12);
	$PDF-> Cell(25,10,$tsArray["Identificacion"],1,'C');
	$PDF-> Cell(40,10,$tsArray["PNomBeca"]." ".$tsArray["SNomBeca"],1,'C');
	$PDF-> Cell(40,10,$tsArray["PApeBeca"]." ".$tsArray["SApeBeca"],1,'C');
	$PDF-> Cell(10,10,$tsArray["Sexo"],1,'C');
	$PDF-> Cell(35,10,$tsArray["FechaNacimi"],1,'C');
	$PDF-> Cell(30,10,$tsArray["Nacionalidad"],1,'C');
	$PDF->Ln();
}
}

$PDF-> OutPut();		

?>
