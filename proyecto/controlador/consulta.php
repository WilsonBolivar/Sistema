<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'sistema';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM repre ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['repre']))
{
	$q=$conexion->real_escape_string($_POST['repre']);
	$query="SELECT * FROM repre WHERE 
		id LIKE '%".$q."%' OR
		PriNombre LIKE '%".$q."%' OR
		SegNombre LIKE '%".$q."%' OR
		PriApellido LIKE '%".$q."%' OR
		SegApellido LIKE '%".$q."%'";
}

$buscarrepre=$conexion->query($query);
if ($buscarrepre->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID</td>
			<td>NOMBRES</td>
			<td>APELLIDOS</td>
			<td>GRUPO</td>
			<td>FECHA INGRESO</td>
		</tr>';

	while($filarepre= $buscarrepre->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filarepre['id'].'</td>
			<td>'.$filarepre['PriNombre'].'</td>
			<td>'.$filarepre['SegNombre'].'</td>
			<td>'.$filarepre['PriApellido'].'</td>
			<td>'.$filarepre['SegApellido'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
