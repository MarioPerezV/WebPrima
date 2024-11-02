<?php
// Esto es para activar la visualización de errores en el servidor, por si los hubiese
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST['enviar'])) {
  if(!empty($_POST['nombre_completo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) &&
    !empty($_POST['correo'])){
      $nombre = $_POST['nombre_completo'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];
      $correo = $_POST['correo'];
      $header = "From: contacto@softwarelaserena.com\r\n";
      $header.= "Reply-To: $correo\r\n";
      $header.= "MIME-Version: 1.0\r\n";
      $header.= "Content-Type: text/html; charset=utf-8\r\n";

      if (mail($correo,$asunto,$mensaje,$header)) {
        echo "<h4>¡Correo enviado Exitosamente!</h4>";
      }
    }  
}
?>
<!-- CODIGO PARA QUE NOS CONTACTEN VIA EMAIL -->
<h2 style="color: blue;"><center>CONT&Aacute;CTENOS</center></h2>
<form id="correo" method="post">
  <input id="campos" type="text" style="color: blue;" placeholder="Nombre" name="nombre_completo" required >
  <input id="campos" type="email" style="color: blue;" placeholder="Correo" name="correo" required >
  <input id="campos" type="text" style="color: blue;" placeholder="Asunto" name="asunto" required >
  <textarea id="text_area" style="color: blue;" placeholder="Mensaje" name="mensaje" ></textarea>
  <input id="enviar_correo" type="submit" style="color: blue;" placeholder="Enviar Correo" name="enviar">
</form>