# UPCI
<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html> 
  <head>
      <center>
  <little>CUENTAS DE UPCI</little>
    <link rel="stylesheet" type="text/css" href="NuevaContrasena.css">
  </head>

  <Div class="form-group text-center">

  <body>
    <header id="header2">
        <h2>RESTABLECER CONTRASEÑA</h2>
      </header>
    <header>
        <form action="" method="post">
        <?php
        
        if(isset($_POST['editar'])) {
            require 'conexion.php';
            
            $usuario = $_POST["usuario"];
            $pass1 =$_POST["pass1"];
            $pass2 =$_POST["pass2"];
            
            $sqlA = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usuario'");
            $rowA = mysqli_num_rows($sqlA);  
            if ($rowA == 1 ) {
                
                if($pass1 == $pass2) {
                    $update = mysqli_query($conn,"UPDATE login SET contrasena= '$pass1' WHERE usuario = '$usuario'");
                    if($update) echo "<script> alert('Se ha actualizado la contraseña');window.location= 'index.php' </script>";
                    
                }
                else{
                    echo "<script> alert('Las contraseñas no coinciden');window.location= 'NuevaContrasena.php' </script>";
                }
            }
            else {
                echo "El usuario no existe";
            }
        }
        
        ?>
        <h3>Usuario</h3>
      </header>
      <section>
        <input id="" type="text" name="usuario" placeholder="Usuario">
      </section>
      <header>
        <h3>Nueva contraseña</h3>
      </header>
      <section>
        <input id="" type="password" name="pass1" placeholder="Contraseña">
      </section>
    <footer>
      <p>8 carácteres como mínimo, incluyendo letras y números</p>
    </footer>
      <header>
        <h3>Vuelve a escribir la contraseña</h3>
      </header>
      <section>
        <input id="" type="password" name="pass2" placeholder="Contraseña">
      </section>
      <section id="section3">
        <p><input type="checkbox" name="chbox"> Hacerme cambiar la contraseña cada 30 días</p>
      </section>
      <nav>
         <input id="btnCan" type="submit" value="Guardar" name="editar">
         </form>
         
        <button id="btnCan" onclick="location.href='index.php'"<p>Regresar</p></button>
        
      </nav>
    </center>
  </body>
</html>
