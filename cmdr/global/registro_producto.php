<?php

  include 'conexion.php';
  
  $nombre_producto = $_POST['nombre_producto'];
  $cantidad = $_POST['cantidad'];

  // ENCRIPTADO DE DATOS
  // $contrasena = hash('sha512', $contrasena);

  $query = "INSERT INTO productos(nombre_producto, cantidad)
            VALUES('$nombre_producto', '$cantidad')";

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
        alert("Producto No Almacenado, intentelo nuevamente");
        window.location = "../login.php";
      </script>';

  }

  mysqli_close($conexion);
  
?>