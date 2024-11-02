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
    <title>JJVV 15R</title>
    <meta name="google-site-verification" content="cDhsSgtKamdxAasvppXPYJxLPfqBBdTw5d5xDs2Gsmo" />  
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-FJU3oUpFN8G7jhDOKjCxwUGUoLZsuvjN57ksRYoX3GhpjSv9NkLQ6XaXy5Tq0OV+" crossorigin="anonymous">
    <link href="css/estilos1.css" rel="stylesheet" type="text/css">

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
<h1><a style="color: red;" href="login.php">Junta de Vecinos 15R Los Porotitos</a></h1>
  <nav>
    <ul>
      <li class="li"><a class="botones" href="../index.php">Inicio</a></li>
      <li class="li"><a class="botones" href="../demo.php">Demo ERP
          <span class="txt-secundario">ERP: Planificación de Recursos Empresariales</span></a></li>
      <li class="li"><a class="botones" href="https://www.radiopasalobien.cl" target="_blank">Radio Pasalo Bien</a></li>
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
          <th>Acciones</th>
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
            <td>
            <?php echo "<a class='botones' href='editar.php?id_usuario=".$datos['id_usuario']."'>Editar</a>"; ?>
            <?php echo "<a class='botones' href='global/eliminar.php?id_usuario=".$datos['id_usuario']."' onclick='return confirmar()'>Borrar</a>";?>
          </td>
          </tr>
        <?php 
        }
        ?>

      </tbody>
    </table>
  </center><br><br><br><br><hr>
  <!-- SECCION REGISTRAR SOCIOS NUEVOS -->
  <form action="global/registro_socio.php" method="POST" class="formulario_registrar_socio">
    <h3>Registrar Nuevos Socios</h3>
    <input type="text" placeholder="Nombre Completo" name="nombre_completo"/>
    <input type="text" placeholder="N&uacute;mero Socio" name="numero_socio"/>
    <input type="text" placeholder="Condici&oacute;n" name="condicion"/>
    <input type="text" placeholder="Edad" name="edad"/>
    <input type="text" placeholder="Fecha Nacimiento" name="fecha_nacimiento"/>
    <input type="text" placeholder="RUT" name="rut"/>
    <input type="text" placeholder="Fecha Ingreso" name="fecha_ingreso"/>
    <input type="text" placeholder="Parcela" name="parcela"/>
    <input type="text" placeholder="Calle" name="calle"/>
    <input type="text" placeholder="Tel&eacute;fono" name="telefono"/>
    <input type="text" placeholder="Patente" name="patente"/>
    <button>Ingresar Datos</button>
  </form>
  <center><br><hr>
    <table class="tabla_socios" border="1"><h1>SOCIOS REGISTRADOS</h1>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre Completo</th>          
          <th>Num. Socio</th>
          <th>Condici&oacute;n</th>
          <th>Edad</th>
          <th>Fecha Nac.</th>
          <th>RUT</th>
          <th>Fecha Ingreso</th>
          <th>Parcela</th>
          <th>Calle</th>
          <th>Tel&eacute;fono</th>
          <th>Patente</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        
        <?php 
        $sql="SELECT * FROM socios";
        $resultado=mysqli_query($conexion,$sql);

        while($datos=mysqli_fetch_array($resultado)){
        ?>
        <tr>
          <td><?php echo $datos['id']?></td>
          <td><?php echo $datos['nombre_completo']?></td>
          <td><?php echo $datos['numero_socio']?></td>
          <td><?php echo $datos['condicion']?></td>
          <td><?php echo $datos['edad']?></td>
          <td><?php echo $datos['fecha_nacimiento']?></td>
          <td><?php echo $datos['rut']?></td>
          <td><?php echo $datos['fecha_ingreso']?></td>
          <td><?php echo $datos['parcela']?></td>
          <td><?php echo $datos['calle']?></td>
          <td><?php echo $datos['telefono']?></td>
          <td><?php echo $datos['patente']?></td>
          
          <td>
            <?php echo "<a href='editar.php?id=".$datos['id']."'>Editar</a>"; ?>
            <?php echo "<a href='global/eliminar.php?id=".$datos['id']."' onclick='return confirmar()'>Borrar</a>";?>
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