# UPCI
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="prueba1.css">
    <!-- CUSTOM JS -->
    <script src="Vista.js" defer></script>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Dashboard</h1>
        </div>
        <ul>
            <li> <a href="prueba1.html"> <div class="menu"> <i class="bx bx-grid-alt"></i> <span>Inicio</span> </div> </a></li>
            <li> <div class="enlace"> <i class="bx bx-user"></i> <span>Usuarios</span> </div> </li>
            <li> <div class="enlace"> <i class="bx bx-home"></i> <span>Departamentos</span> </div> </li>
            <li> <div class="enlace"> <i class="bx bx-grid-alt"></i> <span>Administración y Finanzas</span> </div> </li>
            <li> <a href="vin_exten.php"> <div class="enlace"> <i class="bx bx-message-square"></i> <span>Vinculación y Extensión</span> </div> </a> </li>
            <li> <a href="servicios_escolares.php"> <div class="enlace"> <i class="bx bx-file-blank"></i> <span>Servicios Escolares</span> </div> </a> </li>
            <li> <a href="sub_aca.php"> <div class="enlace"> <i class="bx bx-heart"></i> <span>Subdirección Académica</span> </div> </a> </li>
            <li> <div class="enlace"> <i class="bx bx-wrench"></i> <span>Herramientas</span> </div> </li>
            <li> <div class="enlace"> <i class="bx bx-cog"></i> <span>Configuración</span> </div> </li>
            <li> <a href="salir.php"> <div class="enlace" > <i class="bx bx-exit"></i> <span>Salir</span> </div> </a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button type="submit"> <div id="lupa" class="enlace"> <i class="bx bx-search"></i> </div> </button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Agregar</a>
                    <img src="no.jpg" alt="">
                    <div class="img-case">
                        <img src="nube.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>1900</h1>
                        <h3>Usuarios</h3>
                    </div>
                    <div class="icon-case">
                        <img id="foto1" src="users.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>45</h1>
                        <h3>Personal</h3>
                    </div>
                    <div class="icon-case">
                        <img id="foto1" src="per.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>Escuela</h3>
                    </div>
                    <div class="icon-case">
                        <img id="foto1" src="es.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>380000</h1>
                        <h3>Capital económica</h3>
                    </div>
                    <div class="icon-case">
                        <img id="foto1" src="ca.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Vehiculos</h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    <table>
                        <table>
                        <?php
require 'conexion.php';
?>
                                                <br>
	<table border ="1">
		<tr>
		<td>Tipo</td>
		<td>Cantidad</td>
		<td>Capacidad</td>
</tr>
<?php
$sql="SELECT * from vehiculos";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['TIPO'] ?></td>
	<td><?php echo $mostrar['CANTIDAD']?></td>
    <td><?php echo $mostrar['CAPACIDAD']?></td>
</tr>
</center>
<?php
}
?>
</form>
</table>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Infraestructura</h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    <table>
                        <br>
	<table border ="1">
		<tr>
		<td>Tipo de instalacion</td>
		<td>Cantidad</td>
		<td>Definitivas</td>
		<td>Provisionales</td>
		<td>Capacidad</td>
</tr>
<?php
$sql="SELECT * from infraestructura";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['TIPOdeINSTALACION'] ?></td>
	<td><?php echo $mostrar['CANTIDAD']?></td>
    <td><?php echo $mostrar['DEFINITIVAS']?></td>
    <td><?php echo $mostrar['PROVISIONALES']?></td>
    <td><?php echo $mostrar['CAPACIDAD']?></td>
</tr>
</center>
<?php
}
?>
</form>
</table>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
