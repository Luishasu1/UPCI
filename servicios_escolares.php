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
            <li> <a href="admin_fin.php"> <div class="enlace"> <i class="bx bx-grid-alt"></i> <span>Administración y Finanzas</span> </div> </a> </li>
            <li> <a href="vin_exten.php"> <div class="enlace"> <i class="bx bx-message-square"></i> <span>Vinculación y Extensión</span> </div> </a> </li>
            <li> <div class="enlace"> <i class="bx bx-file-blank"></i> <span>Servicios Escolares</span> </div> </li>
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
                        <h2>Programa edu</h2>
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
        <td>Programa edu</td>
        <td>Estudi insc</td>
        <td>Estudi term</td>
</tr>
<?php
$sql="SELECT * from control_estadias";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['programa_edu'] ?></td>
    <td><?php echo $mostrar['estudi_insc']?></td>
    <td><?php echo $mostrar['estudi_term']?></td>
</tr>
<?php
}
?>
    
    <head>
        <title> calendario anual </title>
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Ciclo Esco</td>
        <td>Cuatrimestre</td>
</tr>
<?php
$sql="SELECT * from calendario_anual";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['ciclo_esco'] ?></td>
    <td><?php echo $mostrar['cuatrimestre']?></td>
</tr>
<?php
}
?>
    <head>
        <title> Preinscritos  </title>
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Requisitos</td>
        <td>Preinsc</td>
</tr>
<?php
$sql="SELECT * from preinsc";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Requisitos'] ?></td>
    <td><?php echo $mostrar['Preinsc']?></td>
</tr>
<?php
}
?>
    
    <head>
        <title> Inscritos  </title>
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Programa Educativo </td>
        <td>Numero Ofertados</td>
        <td>Inscritos </td>
</tr>
<?php
$sql="SELECT * from inscritos";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['programa_edu'] ?></td>
    <td><?php echo $mostrar['numero_ofertados']?></td>
    <td><?php echo $mostrar['inscritos']?></td>
</tr>
<?php
}
?>

    <head>
        <title>inscritos examenes</title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Programa Educativo </td>
        <td> Pase Directo</td>
        <td>Otro</td>
</tr>
<?php
$sql="SELECT * from inscrit_exam ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['programa_educa'] ?></td>
    <td><?php echo $mostrar[' pase_directo']?></td>
    <td><?php echo $mostrar[' otro']?></td>
</tr>
<?php
}
?>

    <head>
        <title>Cursos Poa </title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td> Meta Programada POA</td>
        <td> Cuatrimestre</td>
        <td>Anual</td>
</tr>
<?php
$sql="SELECT * from  cursospoa ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['meta_programadaPOA'] ?></td>
    <td><?php echo $mostrar['cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>

    <head>
        <title>Costos</title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Tramites</td>
        <td>Costos</td>
</tr>
<?php
$sql="SELECT * from costos ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['tramites'] ?></td>
    <td><?php echo $mostrar['costos']?></td>
    
</tr>
<?php
}
?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Meta programada</h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    <table>
                        <br>
	<head>
        <title>Metas Siprep</title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Meta Programada</td>
        <td>Cuatrimestre</td>
        <td>anual</td>
</tr>
<?php
$sql="SELECT * from metas_siprep ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['meta_programadaPOA'] ?></td>
    <td><?php echo $mostrar['cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>

    <head>
        <title> Meta Programada POA</title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Meta Programada POA</td>
        <td>Cuatrimestre</td>
        <td>anual</td>
</tr>
<?php
$sql="SELECT * from meta_programadaPOA ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['meta_programadaPOA'] ?></td>
    <td><?php echo $mostrar['cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
    
    <head>
        <title> Titulos</title> 
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>Programa Educativo</td>
        <td>Sexo</td>
        <td>Total</td>
</tr>
<?php
$sql="SELECT * from titulos ";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['programa_edu'] ?></td>
    <td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['total']?></td>
</tr>
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
