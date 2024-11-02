<?php

  session_start();

  if (!isset($_SESSION['usuario'])) {
    echo '
      <script>
        alert("Iniciar Sesión");
        window.location = "login.php";
      </script>        
      ';
      header("location: login.php");
      session_destroy();
      die();
  }

  include 'global/conexion.php'

?>

<!DOCTYPE html>
<html lang="en">
<head class="c-header">
    
    <meta http-equiv="Content-Type" content="text/css; charset=UTF-8">  </meta>
    <title>Software Solutions</title>
    <meta name="google-site-verification" content="cDhsSgtKamdxAasvppXPYJxLPfqBBdTw5d5xDs2Gsmo" />  
    <link href="css/estilos1.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-FJU3oUpFN8G7jhDOKjCxwUGUoLZsuvjN57ksRYoX3GhpjSv9NkLQ6XaXy5Tq0OV+" crossorigin="anonymous">

    <script type="text/javascript">
      function confirmar(){
        return confirm('¿Estas seguro de eliminar definitivamente la fila de datos?')
      }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWWD7NY76B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-SWWD7NY76B');
    </script>
  </head>
<h1><a style="color: red;" href="login.php">CMDR<span class="txt-secundario">CMDR: Corp. Municipal Desarrollo Social</span></a></h1>
  <nav>
    <ul>
      <li class="li"><a class="botones" href="global/cerrar_sesion.php">Inicio</a></li>
      <li class="li"><a class="botones" href="../demo.php">Demo ERP
          <span class="txt-secundario">ERP: Planificación de Recursos Empresariales</span></a></li>
      <li class="li"><a class="botones" href="global/cerrar_sesion.php">Cerrar Sesión</a></li>
    </ul>
  </nav>
<body>  
  <main class="main_login">
    <div class="contenedor_todo"> <!-- style="column-count: 2;" -->
      <div class="contenedor_login_registrar">
        <form action="global/registro_usuario.php" method="POST" class="formulario_registrar">
          <h3>REGISTRAR USUARIO NUEVO</h3>
          <input type="text" placeholder="Nombre Completo" name="nombre_completo"/>
          <input type="text" placeholder="Correo Electr&oacute;nico" name="correo"/>
          <!-- <label id="subtitulo1">Nombre de Usuario:</label> -->
          <input type="text" placeholder="Nombre Usuario" name="usuario" />
          <!-- <label id="subtitulo1">Clave:</label> -->
          <input type="password" placeholder="Contrase&ntilde;a" name="contrasena" />
          <!-- <label id="subtitulo1">Email:</label> -->          
          <button>Registrar Usuario Nuevo</button>
        </form>
      </div>      
    </div>
    <script src="registrar.js"></script>
  </main>
  <center><br><hr>
    <table class="tabla_usuarios" border="1"><h1>USUARIOS REGISTRADOS</h1>
      <thead>
        <tr>
          <th>Nombre Completo</th>
          <th>Correo</th>
          <th>Usuario</th>
        </tr>
      </thead>
      <tbody>
        
        <?php 
        $sql="SELECT * FROM usuarios";
        $resultado=mysqli_query($conexion,$sql);

        while($datos=mysqli_fetch_array($resultado)){
        ?>
          <tr>
            <td><?php echo $datos['nombre_completo']?></td>
            <td><?php echo $datos['correo']?></td>
            <td><?php echo $datos['usuario']?></td>
          </tr>
        <?php 
        }
        ?>

      </tbody>
    </table>
  </center><br><br><br><br><hr>
  <!-- SECCION EQUIPOS -->
  <form action="global/registro_producto.php" method="POST" class="formulario_registrar_producto">
    <h3>Registrar Equipo de Gimnasio</h3>
    <input type="text" placeholder="Nombre Equipo" name="nombre_producto"/>
    <input type="text" placeholder="Cantidad" name="cantidad"/>      
    <button>Ingresar Datos</button>
  </form>
  <center><br><hr>
    <table class="tabla_equipos" border="1"><h1>EQUIPOS REGISTRADOS</h1>
      <thead>
        <tr>
          <th>ID Registro</th>
          <th>Nombre Equipo</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        
        <?php 
        $sql="SELECT * FROM productos";
        $resultado=mysqli_query($conexion,$sql);

        while($datos=mysqli_fetch_array($resultado)){
        ?>
        <tr>
          <td><?php echo $datos['id_producto']?></td>
          <td><?php echo $datos['nombre_producto']?></td>
          <td><?php echo $datos['cantidad']?></td>
          <td>
            <?php echo "<a href='editar.php?id_producto=".$datos['id_producto']."'>Editar</a>"; ?>
            <?php echo "<a class='botones' href='global/eliminar.php?id_producto=".$datos['id_producto']."' onclick='return confirmar()'>Borrar</a>";?>
          </td>
        </tr>
        <?php 
        }
        ?>
      </tbody>
    </table>
  </center>

</body>
</html>