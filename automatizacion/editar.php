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
      $codigo_producto=$_POST['codigo_producto'];
      $nombre=$_POST['nombre_producto'];
      $cantidad=$_POST['cantidad'];
      $precio=$_POST['precio'];
      $observaciones=$_POST['observaciones'];

      $sql="UPDATE productos SET codigo_producto='".$codigo_producto."', nombre_producto='".$nombre."',
       cantidad='".$cantidad."', precio='".$precio."', observaciones='".$observaciones."' WHERE id_producto='".$id."'";
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
      $codigo_producto = $datos['codigo_producto'];
      $nombre=$datos['nombre_producto'];
      $cantidad=$datos['cantidad'];
      $precio = $datos['precio'];
      $observaciones = $datos['observaciones'];

      mysqli_close($conexion);
    }
  
    
  ?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form_editar_producto">
      <h3>Editar Registro Materiales en Bodega</h3>
      <label>Descripci&oacute;n del Equipo</label>
      <br>
      <input type="text" name="nombre_producto" value="<?php echo $nombre; ?>"/>
      <br><br>
      <label>Cantidad</label><br>
      <input type="text" name="cantidad" value="<?php echo $cantidad; ?>"/>
      <br>
      <label>Precio</label><br>
      <input type="text" name="precio" value="<?php echo $precio; ?>"/>
      <br>
      <label>Observaciones</label><br>
      <input type="text" name="observaciones" value="<?php echo $observaciones; ?>"/>
      <br>
      <input type="hidden" name="id_producto" value="<?php echo $id; ?>"/>
      <br> 
      <input type="submit" name="editar" value="Editar Datos"/>
      <br><br>
      <a href="bienvenida.php">Regresar</a>
    </form>
</body>
</html>