<?php

  include 'conexion.php';
  
  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $username = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  // ENCRIPTADO DE CONTRASEÑA
  // $contrasena = hash('sha512', $contrasena);

  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES('$nombre_completo', '$correo', '$username', '$contrasena')";

  // VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS

  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

  if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
      <script>
        alert("Este correo ya esta registrado, intente con otro o inicie sesión");
        window.location = "../login.php";
      </script>
      ';
    exit();
  } 

  $verificar_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$username' ");

  if (mysqli_num_rows($verificar_username) > 0) {
    echo '
      <script>
        alert("Este usuario ya esta registrado, intenta con otro o inicia sesión");
        window.location = "../login.php";
      </script>
      ';
    exit();
  } 

  $ejecutar = mysqli_query($conexion, $query);

  if($ejecutar){
    echo '
      <script>
        alert("Almacenado");
        window.location = "../login.php";
      </script>';
  } else {
    echo '
      <script>
        alert("Usuario No Almacenado, intentelo nuevamente");
        window.location = "../login.php";
      </script>';

  }

  mysqli_close($conexion);
  
?>