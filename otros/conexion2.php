<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <style>
    table{
      width: 50%;
      border: .2em dotted #ff0000;
      
    }

  </style>
</head>
<body>

<?php
  
  require("conexion.php");

  $conexion=mysqli_connect($bd_host,$bd_usuario,$bd_pass,$bd_nombre);

  if(mysqli_connect_errno()){

    echo "Fallo al conectar BBDD";
    exit();

  }

  mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la BBDD");
  mysqli_set_charset($conexion, "utf8");

  $consulta="SELECT * FROM usuarios WHERE estatus='Activo'";

  $resultados=mysqli_query($conexion,$consulta);

  while($fila=mysqli_fetch_assoc($resultados)){

  echo "<table><tr><td>";
  echo $fila['email'] . "</td><td>";
  echo $fila['telefono'] . "</td><td>";
  echo $fila['estatus'] . "</td><td>";
  echo $fila['tipo_nivel'] . "</td><td></tr></table>";
  echo "<br>";
  echo "<br>";
  }
  mysqli_close($conexion);
  
?>

</body>
</html>