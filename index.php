# UPCI<!DOCTYPE HTML>
<!DOCTYPE HTML>
<title> Login </title>
<head>
	<link rel="stylesheet" type="text/css" href="estiloslog.css">
</head>
<body>
	<section id="from-login">
      <h4><font size="6">Inicio de Sesión</font></h4>
      <br></br>
      <form action="login.php" method="POST">
      <input id="cajas_num1" type="text" name="usuario" placeholder="Usuario">
      <input id="cajas_num2" type="password" name="contrasena" placeholder="Contrasena">
    <center>
        <div class="ub1">
 </div>
<div class="ub1">Rol</div>
<select name="rol">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Usuario">Usuario</option>
<option value="Admin">Administrador</option>
</select>
      <h5> <p> <a href="NuevaContrasena.php">¿Olvidaste tu contraseña?</a> </p> </h5>
    </center>
      <button id="cajas_num3" type="submit">Ingresar</button>

      </form>

    </section>
    </body>
    </html>
