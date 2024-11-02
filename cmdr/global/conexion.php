<?php
    
  define("KEY","GT6BSAXVEW");
  define("COD","AES-128-ECB");

  // define("SERVIDOR","jdbc:mysql://www.softwarelaserena.com:3306/software_erp");
  // define("USUARIO","software");
  // define("PASSWORD","GT6BSAXVEW");
  // define("BD","software_erp");

  $conexion = mysqli_connect("sv.server-chile.com", "software", "GT6BSAXVEW", "software_erp") or die ("Problemas al conectar");

  //PRUEBA DE CONEXION

  // if ($conexion==true) {
  //   echo 'Conectado';
  // } else {
  //   echo 'No Conectado';
  // }  
    
 ?>