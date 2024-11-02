<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php'
?>

<?php
  $busqueda=$_GET["email"];
  $busqueda=$_GET["password"];
  require("conexion.php");
  require("config.php");

  $conexion=mysqli_connect($bd_host,$bd_usuario,$bd_pass,$bd_nombre);

  if(mysqli_connect_errno()){

    echo "Fallo al conectar BBDD";
    exit();

  }

  mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la BBDD");
  mysqli_set_charset($conexion, "utf8");

  $consulta="SELECT * FROM usuarios WHERE estatus LIKE '%$busqueda%'";

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
<form>
<center>
  <p id="titulo">INICIAR SESI&Oacute;N</p>
</center>
<hr>
<br /><br />
<label id="subtitulo1">Nombre Usuario</label>
<br />
<input type="text" class="entrada" />
<br /><br />
<label id="subtitulo2">Contrase&ncaron;a</label>
<br />
<input type="password" class="entrada" />
<br /><br />
<input id="boton" type="submit" value="Buscar" style="color: white; background-color: blue" />
</form>
</body>
</html>