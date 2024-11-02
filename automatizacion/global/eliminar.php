<?php
  
  include 'conexion.php';

  $id=$_GET['id_producto'];

  $sql="DELETE FROM productos WHERE id_producto='".$id."'";
  $resultado=mysqli_query($conexion,$sql);

  if ($resultado) {
    echo '
      <script>
        alert("Dato Eliminado Exitosamente");
        window.location = "../bienvenida.php";
      </script>';
  } else {
    echo '
      <script>
        alert("Error al eliminar los datos");
        window.location = "../bienvenida.php";
      </script>';
  }
  
?>