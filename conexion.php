# UPCI<?php
<?php
$conn = new mysqli("localhost","id18707182_loginupci","pw@_Re|hi_3>Aq-v","id18707182_login");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
$host = "localhost";
$usuario = "id18707182_loginupci";
$contrasena = "pw@_Re|hi_3>Aq-v";
$bd = "id18707182_login";

$conexion = mysqli_connect($host,$usuario,$contrasena,$bd);

?>
