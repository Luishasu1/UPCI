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
            <li> <a href="servicios_escolares.php"> <div class="enlace"> <i class="bx bx-file-blank"></i> <span>Servicios Escolares</span> </div> </a> </li>
            <li> <div class="enlace"> <i class="bx bx-heart"></i> <span>Subdirección Académica</span> </div> </li>
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
                        <h2>Subdirección academica</h2>
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
        <td>Descripcion</td>
        <td>Muy bien 5</td>
        <td>Bien 4</td>
        <td>Regular 3</td>
        <td>Mal 2</td>
        <td>Pesimo 1</td>
        <td>Total de Alumnos</td>
        <td>Grado De Satisfacion</td>
</tr>
<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
	<table border="1">
<tr>
    <td>Programa Educativo</td>
    <td>Total De Tutores</td>
    <td>Tutores Capacitados</td>
    <td>Tutores Con Certificado</td>

</tr>
<?php
$sql="SELECT*from cafe";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['ProgramaEducativo'] ?></td>
    <td><?php echo $mostrar['TotalDeTutores']?></td>
    <td><?php echo $mostrar['TutoresCapacitados']?></td>
    <td><?php echo $mostrar['TutoresConCertificado']?></td>
    </tr>

<?php
}
?>
    
    <head>
        <title> captuto </title>
</head>

<body>
    <br>
    <table border="1">
<tr>

<td>Descripcion</td>
    <td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from captuto";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>

    <head>
        <title> dep</title>
</head>

<body>
    <br>
    <table border="1">

  <tr>
  <td>Nombre del laboratorio</td>
  <td>Cantidad</td>
  <td>No. de equipos</td>
  <td>Actividad Realizada</td>
  <td>No man</td>
  <td>No preventivo</td>
</tr>
<?php
$sql="SELECT*from dep";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['nombre_del_laboratorio'] ?></td>
    <td><?php echo $mostrar['cantidad']?></td>
    <td><?php echo $mostrar['no_equipos']?></td>
    <td><?php echo $mostrar['activi_realiz']?></td>
    <td><?php echo $mostrar['no_man']?></td>
    <td><?php echo $mostrar['no_equipos']?></td>
    
</tr>
<?php
}
?>
    <head>
        <title> desclab</title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>Trimestre</td>
    <td>Fecha</td>
    <td>Actividad</td>
    <td>DescripcionBreveDeLaActividad</td>
    <td>BeneficioParaLaInstitucion</td>
</tr>
<?php
$sql="SELECT*from desclab";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
    ?>

<tr>
    <td><?php echo $mostrar ['Trimestre'] ?></td>
    <td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['DescripcionBreveDeLaActividad']?></td>
    <td><?php echo $mostrar['BeneficioParaLaInstitucion']?></td> 
</tr>
<?php
}
?>
    <head>
        <title> forinte</title>
</head>

<body>
    <br>
    <table border="1">
<tr>
<td>Descripcion</td>
    <td>Muy bien5</td>
    <td>Bien 4</td>
    <td>Regular 3</td>
    <td>Mal 2</td>
    <td>Pesimo 1</td>
    <td>Total de Alumnos</td>
    <td>Grado De Satisfacion</td>
    </tr>

<?php
$sql="SELECT*from forinte";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['Descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
    <head>
        <title> infoestrut </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>cuatrimestre1</td>
    <td>cuatrimestre2</td>
    <td>cuatrimestre3</td>
    <td>anual</td>
    </tr>
    <?php
$sql="SELECT*from infoestrut";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['cuatrimestre1'] ?></td>
    <td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['anual']?></td>
    
</tr>
<?php
}
?>

    <head>
        <title> poatuc </title>
</head>

<body>
    <br>
    <table border="1">

<tr>
    <td>cuatrimestre1</td>
    <td>cuatrimestre2</td>
    <td>cuatrimestre3</td>
    <td>anual</td>
</tr>
<?php
$sql="SELECT*from poatuc";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['cuatrimestre1'] ?></td>
    <td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['anual']?></td>
    
</tr>
<?php
}
?>

    <head>
        <title> poatut </title>
</head>

<body>
    <br>
    <table border="1">
<tr>

    <td>No</td>
    <td>Fecha</td>
    <td>Actividad</td>
    <td>PersonalQueImpartio</td>
    <td>Lugar</td>
    <td>RedSocial</td>
    </tr>
<?php
$sql="SELECT*from poatut";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['No'] ?></td>
    <td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
    <td><?php echo $mostrar ['Lugar'] ?></td>
    <td><?php echo $mostrar['RedSocial']?></td>   
</tr>
<?php
}
?>

    <head>
        <title> prepvio </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>ProgramaEducativo</td>
    <td>FechaDeInicio</td>
    <td>FechaDeTermino</td>
    <td>NombreDelProyecto</td>
    <td>ObjetivoDelProyecto</td>
    <td>NombreDelResponsable</td>
    <td>Rol</td>
    <td>RegistroEnAlgunaInstancia</td>
    <td>Entregable</td>
</tr>

<?php
$sql="SELECT*from prepvio";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
    ?>

<tr>
    <td><?php echo $mostrar ['ProgramaEducativo'] ?></td>
    <td><?php echo $mostrar['FechaDeInicio']?></td>
    <td><?php echo $mostrar['FechaDeTermino']?></td>
    <td><?php echo $mostrar['NombreDelProyecto']?></td>
    <td><?php echo $mostrar['NombreDelResponsable']?></td>
    <td><?php echo $mostrar['Rol']?></td>
    <td><?php echo $mostrar['RegistroEnAlgunaInstancia']?></td>
    <td><?php echo $mostrar['Entregable']?></td>
</tr>
<?php
}
?>

    <head>
        <title> proto_inv</title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>Descripcion</td>
    <td>Muybien 5</td>
    <td>Bien 4</td>
    <td>Regular 3</td>
    <td>Mal 2</td>
    <td>Pesimo 1</td>
    <td>Total de Alumnos</td>
    <td>Grado De Satisfacion</td>
    </tr>

<?php
$sql="SELECT*from proto_inv";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['Descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Sat desert</h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    <table>
                        <br>
	<table border="1">
<tr>
    <td>Descripcion</td>
    <td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from satdeser";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['Descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>

    <head>
        <title> sarmed </title>
</head>

<body>
    <br>
    <table border="1">
        <tr>
    <td>Trimestre1</td>
     <td>Trimestre2</td>
     <td>Trimestre3</td>
     <td>Trimestre4</td>
     <td>Anual</td>
     <td>Sexo</td>
     <td>Nivel</td>
</tr>
<?php
$sql="SELECT*from sarmed";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['trimestre1'] ?></td>
    <td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
    <td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['nivel']?></td>
</tr>
<?php
}
?>
    
    <head>
        <title> sipreping </title>
</head>

<body>
    <br>
    <table border="1">

    <tr>
    <td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from sipreping";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['trimestre1'] ?></td>
    <td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>

    <head>
        <title> sipreppvio</title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from sipreppvio";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['trimestre1'] ?></td>
    <td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
    
    <head>
        <title>  sipreptratoyop </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>

<?php
$sql="SELECT*from sipreptratoyop";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['trimestre1'] ?></td>
    <td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>

    <head>
        <title> siprep_desm_aca </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from siprep_desm_aca";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>  
<tr>
    <td><?php echo $mostrar ['trimestre1'] ?></td>
    <td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>

    <head>
        <title> siprep_prot </title>
</head>

<body>
    <br>
    <table border="1">

<tr>
    <td>No</td>
    <td>Fecha</td>
    <td>Actividad</td>
    <td>PersonalQueImpartio</td>
    <td>Lugar</td>
    <td>RedSocial</td>
</tr>
<?php
$sql="SELECT*from siprep_prot";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>  
<tr>
    <td><?php echo $mostrar ['No'] ?></td>
    <td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
    <td><?php echo $mostrar ['Lugar'] ?></td>
    <td><?php echo $mostrar['RedSocial']?></td>   
</tr>
<?php
}
?>

    <head>
        <title> tatyop </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>Descripcion</td>
    <td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from tatyop";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar ['Descripcion'] ?></td>
    <td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>

    <head>
        <title> tatu</title>
</head>

<body>
    <br>
    <table border="1">
<tr>
    <td>EstudiantesQueAsisten</td>
    <td>sexo</td>
    <td>NumeroDeEstudiantes</td>
      <td>EstudiantesAtendidos</td>

</tr>
<?php
$sql="SELECT*from tatu";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['EstudiantesQueAsisten'] ?></td>
    <td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['NumeroDeEstudiantes']?></td>
    <td><?php echo $mostrar['EstudiantesAtendidos']?></td> 
</tr>
<?php
}
?>
    
    <head>
        <title> tatorias_est </title>
</head>

<body>
    <br>
    <table border="1">
<tr>
<td>cuatrimestre1</td>
    <td>cuatrimestre2</td>
    <td>cuatrimestre3</td>
    <td>anual</td>
    </tr>
<?php
$sql="SELECT*from tatorias_est";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar ['cuatrimestre1'] ?></td>
    <td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
    <td><?php echo $mostrar ['anual'] ?></td>

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
