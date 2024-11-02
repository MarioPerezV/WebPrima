<?php

  include 'conexion.php';
  
  $nombre_completo = $_POST['nombre_completo'];
  $numero_socio = $_POST['numero_socio'];
  $condicion = $_POST['condicion'];
  $edad = $_POST['edad'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $rut = $_POST['rut'];
  $fecha_ingreso = $_POST['fecha_ingreso'];
  $parcela = $_POST['parcela'];
  $calle = $_POST['calle'];
  $telefono = $_POST['telefono'];
  $patente = $_POST['patente'];

  // ENCRIPTADO DE DATOS
  // $contrasena = hash('sha512', $contrasena);

  $query = "INSERT INTO socios(nombre_completo, numero_socio, condicion, edad, fecha_nacimiento, rut, 
                              fecha_ingreso, parcela, calle, telefono, patente)
            VALUES('$nombre_completo', '$numero_socio', '$condicion', '$edad', '$fecha_nacimiento',
                    '$rut', '$fecha_ingreso', '$parcela', '$calle', '$telefono', '$patente')";

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