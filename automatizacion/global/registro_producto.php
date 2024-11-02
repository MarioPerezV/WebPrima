<?php

  include 'conexion.php';
  
  $codigo_producto = $_POST['codigo_producto'];
  $nombre_producto = $_POST['nombre_producto'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];
  $observaciones = $_POST['observaciones'];

  // ENCRIPTADO DE DATOS
  // $contrasena = hash('sha512', $contrasena);

  $query = "INSERT INTO productos(codigo_producto, nombre_producto, cantidad, precio, observaciones)
            VALUES('$codigo_producto', '$nombre_producto', '$cantidad', '$precio', '$observaciones')";

  $ejecutar = mysqli_query($conexion, $query);

  if($ejecutar){
    echo '
      <script>
        alert("Datos Almacenados Correctamente");
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