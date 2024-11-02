<?php

  session_start();

  include 'conexion.php';

  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  // $contrasena = hash('sha512', $contrasena);  //hash tiene 129 caracteres y varchar solo 50

  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
  and contrasena='$contrasena'");

  if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location: ../bienvenida.php");

  } else {
    echo '
      <script>
        alert("Usuario no encontrado, verifique los datos ingresados o registre el usuario");
        window.location = "../login.php";
      </script>
    ';
    exit();
  }
    

?>