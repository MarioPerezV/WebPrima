<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php

function ejecuta_consulta($labusqueda){

  //$busqueda=$_GET["buscar"];
  require("conexion.php");

  $conexion=mysqli_connect($bd_host,$bd_usuario,$bd_pass,$bd_nombre);

  if(mysqli_connect_errno()){

    echo "Fallo al conectar BBDD";
    exit();

  }

  mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la BBDD");
  mysqli_set_charset($conexion, "utf8");

  $consulta="SELECT * FROM usuarios WHERE estatus LIKE '%$labusqueda%'";

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
}
  
?>
</head>
<body>

<?php

  $mibusqueda=$_GET["buscar"];
  $mipag=$_server["PHP_SELF"];

  if($mibusqueda!=NULL){
    ejecuta_consulta($mibusqueda);
  }else{
    echo ("<form action='" . $mipag . "' method='get'>
    <label>Buscar:</label>
    <br />
    <input type='text' name='buscar' />
    <input id='boton' type='submit' name='enviando' value='A Buscar!' style='color: white; background-color: blue'/>
    </form>");
  }


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
<input id="boton" type="submit" value="Ingresar" style="color: white; background-color: blue" />
</form>
</body>
</html>