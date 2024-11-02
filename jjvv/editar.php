<?php 
  include 'global/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Registro</title>
</head>
<body>
  <?php 
    if (isset($_POST['editar'])) {
      $id=$_POST['id_producto'];
      $nombre=$_POST['nombre_producto'];
      $cantidad=$_POST['cantidad'];

      $sql="UPDATE productos SET nombre_producto='".$nombre."',
            cantidad='".$cantidad."' WHERE id_producto='".$id."'";
      $resultado=mysqli_query($conexion,$sql);

        if ($resultado) {
          echo '
        <script>
          alert("Dato Modificado Exitosamente");
          window.location = "bienvenida.php";
        </script>';
        } else {
          echo '
        <script>
          alert("Dato No se ha modificado");
          window.location = "bienvenida.php";
        </script>';
        }      

    } else {
      $id=$_GET['id_producto'];
      $sql="SELECT * FROM productos WHERE id_producto='".$id."'";
      $resultado=mysqli_query($conexion,$sql);

      $datos=mysqli_fetch_assoc($resultado);
      $nombre=$datos["nombre_producto"];
      $cantidad=$datos["cantidad"];

      mysqli_close($conexion);
    }
    
  ?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form_editar_producto">
      <h3>Editar Registro Equipo de Gimnasio</h3>
      <label>Descripci&oacute;n del Equipo</label>
      <br>
      <input type="text" name="nombre_producto" value="<?php echo $nombre; ?>"/>
      <br><br>
      <label>Cantidad</label><br>
      <input type="text" name="cantidad" value="<?php echo $cantidad; ?>"/>
      <br>
      <input type="hidden" name="id_producto" value="<?php echo $id; ?>"/>
      <br> 
      <input type="submit" name="editar" value="Editar Datos"/>
      <br><br>
      <a href="bienvenida.php">Regresar</a>
    </form>
</body>
</html>