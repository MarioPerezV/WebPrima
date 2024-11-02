<?php

session_start();

if (isset($_SESSION['usuario'])) {
  header("location: bienvenida.php");
}

// include '../global/config.php';
include 'global/conexion.php'
// include '../templates/cabecera.php'

?>
<!DOCTYPE html>
<html lang="es" style="background-color: white;">

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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWWD7NY76B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'G-SWWD7NY76B');
    </script>
  </head>
  <h1><a style="color: red;" href="../index.php">Demo WEB ERP</a></h1>
  <nav>
    <ul>
      <li class="li"><a class="botones" href="login.php">Inicio</a></li>
      <li class="li"><a class="botones" href="../demo.php">Demo ERP
          <span class="txt-secundario">ERP: Planificación de Recursos Empresariales</span></a></li>
      <li class="li"><a class="botones" href="../planes.php">Nuestros Planes</a></li>
      <li class="li"><a class="botones" href="https://www.radiopasalobien.cl" target="_blank">Radio Pasalo Bien</a></li>
      <li class="li"><a class="botones" href="login.php">Solo Personal Autorizado</a></li>
    </ul>
  </nav>
  <section>
    <article class="article">BIENVENIDOS<br>+56 9 4070 4005</article>
  </section><br><hr>
  <main class="main_login">
    <div class="contenedor_todo"> <!-- style="column-count: 2;" -->
      <div class="caja_trasera">
        <div class="caja_trasera_login">
          <h3 style="text-align: rigth;">¿Ya tienes una cuenta?</h3>
          <label style="text-align: rigth;">Inicia Sesi&oacute;n para Ingresar al Sistema o solicita tu registro con daniel@ejemplo.cl</label><br>
          <button id="btn_login">Iniciar Sesi&oacute;n</button>
        </div>
      </div>
             
      <div class="contenedor_login_registrar">
        <form action="global/login_usuarios.php" method="POST" class="formulario_login">
          <h3>Iniciar Sesi&oacute;n Demo:</h3>
          <center><p>demo@ejemplo.cl y 1234</p></center>
          <!-- <label id="subtitulo1">Email:</label> -->
          <input type="text" placeholder="demo@ejemplo.cl" name="correo"/>
          <!-- <label id="subtitulo1">Clave:</label> -->
          <input type="password" placeholder="1234" name="contrasena"/> 
          <button>Ingresar al Sistema</button>
        </form>
      </div>      
    </div>
    <script src="login.js"></script>
  </main>
  <br><hr>
    <p style="color: blue;">La confirmaci&oacute;n de registro se realiza a trav&eacute;z de correo electr&oacute;nico y WhatsApp</p>
<h3 style="color: blue;">Nuestros Socios:<br>* Corporaci&oacute;n Municipal Desarrollo Social Antofagsata. - * MarbellaDecoFlor. - * Flushing Chile. * Ferretería Porotitos.<br> Ubicados en Antofagasta y La Serena, Chile</h3>
<center>
<div class="contenedor1">
  <img style="height: 20em;" class="imagenpie" src="../imagenes/luzia.jpeg" alt="imagen de inteligencia artificial">
  <div class="centrado"><strong style="color:lime; background: none;" >Web creada con la ayuda de la Inteligencia Artificial</strong></div>
</div>
<style>
.contenedor1{
    position: relative;
    display: inline-block;
    text-align: center;
}
.centrado{
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: none;
    color: lime;
    font-size: 1.2em;
}
.centrado2{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: none;
    font-size: 1.2em;
}
</style>
<section class="pie">
  <h2></h2>
  
</section></center>
</body>
</html>
<!-- INSTALAR UNA IMAGEN DE FONDO COMPLETO DEL PIE CON TEXTO SOBRE LA IMAGEN -->