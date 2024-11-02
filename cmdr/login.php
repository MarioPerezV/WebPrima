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
  <h1><a style="color: red;" href="login.php">CMDR<span class="txt-secundario">CMDR: Corp. Municipal Desarrollo Social</span></a></h1>
  <nav>
    <ul>
      <li class="li"><a class="botones" href="../index.php">Inicio</a></li>
      <li class="li"><a class="botones" href="../demo.php">Demo ERP
          <span class="txt-secundario">ERP: Planificación de Recursos Empresariales</span></a></li>
      <li class="li"><a class="botones" href="../planes.php">Nuestros Planes</a></li>
      <li class="li"><a class="botones" href="https://www.radiopasalobien.cl" target="_blank">Radio Pasalo Bien</a></li>
      <li class="li"><a class="botones" href="login.php">Solo Personal Autorizado</a></li>
    </ul>
  </nav>
  <section>
    <article class="article">BIENVENIDOS<br>+569 4070 4005</article>
  </section><br><hr>
  <main class="main_login">
    <div class="contenedor_todo"> <!-- style="column-count: 2;" -->
      <div class="caja_trasera">
        <div class="caja_trasera_login">
          <h3>¿Ya tienes una cuenta?</h3>
          <label>Inicia Sesi&oacute;n para Ingresar al Sistema o solicita tu registro con daniel@ejemplo.cl</label><br>
          <button id="btn_login">Iniciar Sesi&oacute;n</button>
        </div>
      </div>
        <!-- <div class="caja_trasera_registrar">
          <h3>¿A&uacute;n No tienes una cuenta?</h3>
          <label>Registrarse para Inicia Sesi&oacute;n</label><br>
          <button id="btn_registrarse">Registrarse</button>
        </div> -->      
      <div class="contenedor_login_registrar">
        <form action="global/login_usuarios.php" method="POST" class="formulario_login">
          <h3>Iniciar Sesi&oacute;n</h3>
          <!-- <label id="subtitulo1">Email:</label> -->
          <input type="text" placeholder="Correo Electr&oacute;nico" name="correo"/>
          <!-- <label id="subtitulo1">Clave:</label> -->
          <input type="password" placeholder="Contrase&ntilde;a" name="contrasena"/> 
          <button>Ingresar al Sistema</button>
        </form>
      </div>      
    </div>
    <script src="login.js"></script>
  </main>
  <br><hr>
    <p style="color: blue;">La confirmaci&oacute;n de registro se realiza a trav&eacute;z de correo electr&oacute;nico y WhatsApp</p>
<h3 style="color: blue;">Nuestros Socios:<br>* MarbellaDecoFlor. - * Radio Pasalo Bien. - * Flushing Chile. * Ferretería Porotitos.</h3>
<center>
<div class="contenedor1">
  <img style="height: 20em;" class="imagenpie" src="https://los40es00.epimg.net/los40/imagenes/2023/05/15/tecnologia/1684142036_814298_1684142225_gigante_normal.jpg" alt="imagen de inteligencia artificial">
  <div class="centrado"><strong style="color:lime; background: none;" >P&aacute;gina web creada con la ayuda de la inteligencia artificial ChatGPT</strong></div>
</div>
<aside>
  <div class="contenedor1">
    <img style="height: 20em;" src="../imagenes/amazon.png" alt="Todo el retail de amazon lo puedes encontrar aquí.">
    <div class="centrado2"><strong style="background: none;">Recuerda que Amazon está entregando despacho gratis por compras superiores a $50.000</strong></div>
  </div>
</aside>
<style>
.contenedor1{
    position: relative;
    display: inline-block;
    text-align: center;
}
.centrado{
    position: absolute;
    top: 10%;
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