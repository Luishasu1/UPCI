# UPCI<?php
<?php

require 'conexion.php';

$usuario 	= $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$rol 	= $_POST["rol"];


$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usuario' and contrasena = '$contrasena' and rol = '$rol'");
$nr = mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($rol=="Usuario")
			{	
				header("location: prueba2.html");
			}
		else if ($rol=="Admin")
			{
				header("location: prueba1.html");
			}
	}
else
{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.php' </script>";
}


?>
