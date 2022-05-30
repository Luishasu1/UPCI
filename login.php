# UPCI<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$q = "SELECT COUNT(*) as contar from usuario where usuario = '$usuario' and contrasena = '$contrasena'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array ['contar']>0) {
	$_SESSION['username'] = $usuario;
	header("location: prin.php");
}else{
	echo"<script type=\"text/javascript\">alert('Datos incorrectos. Vuelva a intentar'); window.location='index.php';</script>";
}


?>
