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
            <li>  <div  class="enlace"> <i class="bx bx-message-square"></i> <span>Vinculación y Extensión</span></div></li>
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
	<head>
        <title> becas_de_extencion_de_pago </title>
</head>

<body>
    <br>
    <table border ="1">
        <tr>
        <td>programa educativo</td>
        <td>sexo</td>

</tr>
<?php
$sql="SELECT * from becas_de_extencion_de_pago";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['programa_educativo'] ?></td>
    <td><?php echo $mostrar['sexo']?></td>
</tr>
<?php
}
?>
<head>
        <title> meta programadapoa </title>
</head>


    <br>
    <table border ="1">
        <tr>
        <td>Meta_Programada_POA</td>
        <td>1cuatrimestre</td>
        <td>2cuatrimestre</td>
        <td>3cuatrimestre</td>
        <td>anual</td>

</tr>

<?php
$sql="SELECT * from metaprogramadapoa";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Meta_Programada_POA'] ?></td>
    <td><?php echo $mostrar['1cuatrimestre']?></td>
    <td><?php echo $mostrar['2cuatrimestre']?></td>
    <td><?php echo $mostrar['3cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
<head>
        <title> metaprogramada_poa </title>
</head>

<body>
    
    <br>
    <table border ="1">
        <tr>
        <td>Meta_Programada_POA</td>
        <td>1cuatrimestre</td>
        <td>2cuatrimestre</td>
        <td>3cuatrimestre</td>
        <td>anual</td>

</tr>

<?php
$sql="SELECT * from metaprogramada_poa";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Meta_Programada_POA'] ?></td>
    <td><?php echo $mostrar['1cuatrimestre']?></td>
    <td><?php echo $mostrar['2cuatrimestre']?></td>
    <td><?php echo $mostrar['3cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
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
	<head>
        <title> metas_programadas_poa </title>
</head>

<body>
    
    <br>
    <table border ="1">
        <tr>
        <td>Meta_Programada_POA</td>
        <td>1cuatrimestre</td>
        <td>2cuatrimestre</td>
        <td>3cuatrimestre</td>
        <td>anual</td>

</tr>

<?php
$sql="SELECT * from metas_programadas_poa";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Meta_Programada_POA'] ?></td>
    <td><?php echo $mostrar['1cuatrimestre']?></td>
    <td><?php echo $mostrar['2cuatrimestre']?></td>
    <td><?php echo $mostrar['3cuatrimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
<head>
        <title> meta_programada_siprep </title>
</head>

<body>
    
    <br>
    <table border ="1">
        <tr>
        <td>Meta_Programada_POA</td>
        <td>1trimestre</td>
        <td>2trimestre</td>
        <td>3trimestre</td>
        <td>anual</td>

</tr>

<?php
$sql="SELECT * from meta_programada_siprep";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Meta_Programada_POA'] ?></td>
    <td><?php echo $mostrar['1trimestre']?></td>
    <td><?php echo $mostrar['2trimestre']?></td>
    <td><?php echo $mostrar['3trimestre']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
<head>
        <title> programaeducativo </title>
</head>

<body>
    
    <br>
    <table border ="1">
        <tr>
        <td>Programa_Educativo</td>
        <td>Estudiantes_certificacion_y_evaluacion</td>
        <td>inscritos_en_ingles</td>
</tr>

<?php
$sql="SELECT * from programaeducativo";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $mostrar ['Programa_Educativo'] ?></td>
    <td><?php echo $mostrar['Estudiantes_certificacion_y_evaluacion']?></td>
    <td><?php echo $mostrar['inscritos_en_ingles']?></td>
</tr>
<?php
}
?>
<head>
		<title> programa_educativo </title>
</head>

<body>
	
	<br>
	<table border ="1">
		<tr>
		<td>Programa_Educativo</td>
		<td>Total_De_egresados_del_ciclo_escolar_2020_2021</td>
		<td>Ocupacion_actual</td>
		<td>Tiempo_que_tardo_en_oocuparse_laboralmente</td>
		<td>sector_productivo</td>
</tr>

<?php
$sql="SELECT * from Programa_Educativo";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['Programa_Educativo'] ?></td>
	<td><?php echo $mostrar['Total_De_egresados_del_ciclo_escolar_2020_2021']?></td>
	<td><?php echo $mostrar['Ocupacion_actual']?></td>
	<td><?php echo $mostrar['Tiempo_que_tardo_en_oocuparse_laboralmente']?></td>
	<td><?php echo $mostrar['sector_productivo']?></td>
</tr>
<?php
}
?>
<head>
		<title> programa_educativo </title>
</head>
	
	<br>
	<table border ="1">
		<tr>
		<td>Programa_educativo</td>
		<td>Total_De_egresados_del_ciclo_escolar_2020_2021</td>
		<td>Ocupacion_actual</td>
		<td>Tiempo_que_tardo_en_oocuparse_laboralmente</td>
		<td>sector_productivo</td>
</tr>

<?php
$sql="SELECT * from Programa_educativo";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['Programa_Educativo'] ?></td>
	<td><?php echo $mostrar['Total_De_egresados_del_ciclo_escolar_2020_2021']?></td>
	<td><?php echo $mostrar['Ocupacion_actual']?></td>
	<td><?php echo $mostrar['Tiempo_que_tardo_en_oocuparse_laboralmente']?></td>
	<td><?php echo $mostrar['sector_productivo']?></td>
</tr>
<?php
}
?>
<head>
		<title> programa_educativo1 </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>programa_educativo</td>
		<td>estudiantes_inscritos_en_ingles</td>
</tr>

<?php
$sql="SELECT * from programa_educativo1";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['programa_educativo'] ?></td>
	<td><?php echo $mostrar['estudiantes_inscritos_en_ingles']?></td>
</tr>
<?php
}
?>
<head>
		<title> convefirma </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Convenio</td>
		<td>Genero</td>
		<td>Total</td>
		</tr>

<?php
$sql="SELECT * from convefirma";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Convenio']?></td>
	<td><?php echo $mostrar['Genero']?></td>
	<td><?php echo $mostrar['Total']?></td>
</tr>
<?php
}
?>
<head>
		<title> convevigen </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>Tipo</td>
		<td>Número De Convenios Firmados</td>
		<td>Total</td>
		</tr>

<?php
$sql="SELECT * from convevigen";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['Tipo'] ?></td>
	<td><?php echo $mostrar['Número De Convenios Firmados']?></td>
	<td><?php echo $mostrar['Total']?></td>
</tr>
<?php
}
?>
<head>
		<title> difudeconvo </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>Fecha</td>
		<td>Programa Educativo</td>
		<td>Actividad realizada</td>
		<td>Lugar</td>
		<td>Personal Académico responsable</td>
		<td>Genero</td>
        <td>Beneficio o aportación a la Institución</td>

		</tr>

<?php
$sql="SELECT * from difudeconvo";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['Fecha'] ?></td>
	<td><?php echo $mostrar['Programa Educativo']?></td>
	<td><?php echo $mostrar['Actividad realizada']?></td>
	<td><?php echo $mostrar['Lugar']?></td>
	<td><?php echo $mostrar['Personal Académico responsable']?></td>
	<td><?php echo $mostrar['Genero']?></td>
	<td><?php echo $mostrar['Beneficio o aportación a la Institución']?></td>
</tr>
<?php
}
?>
<head>
		<title> emprendedurismo </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Actividad</td>
		<td>Temática</td>
		<td>Lugar</td>
		<td>Genero</td>
        <td>Total</td>

		</tr>

<?php
$sql="SELECT * from emprendedurismo";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Actividad']?></td>
	<td><?php echo $mostrar['Temática']?></td>
	<td><?php echo $mostrar['Lugar']?></td>
	<td><?php echo $mostrar['Genero']?></td>
	<td><?php echo $mostrar['Total']?></td>
</tr>
<?php
}
?>
<head>
		<title> eventcult </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Institución/Sede</td>
		<td>Actividad</td>
		<td>Número de Reproducciones</td>
		<td>No.Estudiantes que participaron</td>
        <td>Beneficio o aportación a la Institución</td>

		</tr>

<?php
$sql="SELECT * from eventcult";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Institución/Sede']?></td>
	<td><?php echo $mostrar['Actividad']?></td>
	<td><?php echo $mostrar['Número de Reproducciones']?></td>
	<td><?php echo $mostrar['No.Estudiantes que participaron']?></td>
	<td><?php echo $mostrar['Beneficio o aportación a la Institución']?></td>
</tr>
<?php
}
?>
<head>
		<title> eventdeport </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Institución/Sede</td>
		<td>Actividad</td>
		<td>Número de Reproducciones</td>
		<td>No.Estudiantes que participaron</td>
        <td>Beneficio o aportación a la Institución</td>

		</tr>

<?php
$sql="SELECT * from eventdeport";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Institución/Sede']?></td>
	<td><?php echo $mostrar['Actividad']?></td>
	<td><?php echo $mostrar['Número de Reproducciones']?></td>
	<td><?php echo $mostrar['No.Estudiantes que participaron']?></td>
	<td><?php echo $mostrar['Beneficio o aportación a la Institución']?></td>
</tr>
<?php
}
?>
<head>
		<title> internacionalización </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>Fecha</td>
		<td>Programa Educativo</td>
		<td>Actividad realizada</td>
		<td>Lugar</td>
		<td>Genero</td>
        <td>Beneficio o aportación a la Institución</td>

		</tr>

<?php
$sql="SELECT * from internacionalización";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['Fecha'] ?></td>
	<td><?php echo $mostrar['Programa Educativo']?></td>
	<td><?php echo $mostrar['Actividad realizada']?></td>
	<td><?php echo $mostrar['Lugar']?></td>
	<td><?php echo $mostrar['Genero']?></td>
	<td><?php echo $mostrar['Beneficio o aportación a la Institución']?></td>
</tr>
<?php
}
?>
<head>
		<title> metapoacult </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>1°Trimestre</td>
		<td>2°Trimestre</td>
		<td>3°Trimestre</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['1°Trimestre'] ?></td>
	<td><?php echo $mostrar['2°Trimestre']?></td>
	<td><?php echo $mostrar['3°Trimestre']?></td>
	<td><?php echo $mostrar['Anual']?></td>
</tr>
<?php
}
?>
<head>
		<title> metapoadeport </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>1°Trimestre</td>
		<td>2°Trimestre</td>
		<td>3°Trimestre</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['1°Trimestre'] ?></td>
	<td><?php echo $mostrar['2°Trimestre']?></td>
	<td><?php echo $mostrar['3°Trimestre']?></td>
	<td><?php echo $mostrar['Anual']?></td>
</tr>
<?php
}
?>
<head>
		<title> metasiprepemprende </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>1°Trimestre</td>
		<td>2°Trimestre</td>
		<td>3°Trimestre</td>
		<td>4°Trimestre</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['1°Trimestre'] ?></td>
	<td><?php echo $mostrar['2°Trimestre']?></td>
	<td><?php echo $mostrar['4°Trimestre']?></td>
	<td><?php echo $mostrar['Anual']?></td>
</tr>
<?php
}
?>
<head>
		<title> metasiprepempresa </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>1°Trimestre</td>
		<td>2°Trimestre</td>
		<td>3°Trimestre</td>
		<td>4°Trimestre</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['1°Trimestre'] ?></td>
	<td><?php echo $mostrar['2°Trimestre']?></td>
	<td><?php echo $mostrar['4°Trimestre']?></td>
	<td><?php echo $mostrar['Anual']?></td>
</tr>
<?php
}
?>
<head>
		<title> metasiprepinternali </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>1°Trimestre</td>
		<td>2°Trimestre</td>
		<td>3°Trimestre</td>
		<td>4°Trimestre</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['1°Trimestre'] ?></td>
	<td><?php echo $mostrar['2°Trimestre']?></td>
	<td><?php echo $mostrar['4°Trimestre']?></td>
	<td><?php echo $mostrar['Anual']?></td>
</tr>
<?php
}
?>
<head>
		<title> ofereduca </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Red social/Institución visitada</td>
		<td>No. Listado de alumnos</td>
		<td>Anual</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Red social/Institución visitada']?></td>
	<td><?php echo $mostrar['No. Listado de alumnos']?></td>
</tr>
<?php
}
?>
<head>
		<title> vincuempre </title>
</head>
	<br>
	<table border ="1">
		<tr>
		<td>No</td>
		<td>Fecha</td>
		<td>Organismo</td>
		<td>Acción De Vinculación</td>
		<td>Objeto Del Convenio</td>

		</tr>

<?php
$sql="SELECT * from actculturales";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
	<td><?php echo $mostrar['Organismo']?></td>
	<td><?php echo $mostrar['Acción De Vinculación']?></td>
	<td><?php echo $mostrar['Objeto Del Convenio']?></td>
</tr>
</table>
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
