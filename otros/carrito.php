<?php 
//para almacenar datos de la compra en la BBDD
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){
  switch($_POST['btnAccion']){

    case 'Agregar':
      if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje.="Ok, ID correcto ".$ID."</br>";
      }else{
        $mensaje.="Algo malió sal, ID Incorrecto".$ID."</br>";
      }

      if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
          $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
          $mensaje.="Ok, Nombre correcto ".$NOMBRE."</br>";
      }else{
        $mensaje.="Algo malió sal, Nombre Incorrecto".$NOMBRE."</br>"; break; }

      if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.="Ok, Cantidad correcto ".$CANTIDAD."</br>";

      }else{
        $mensaje.="Algo malió sal, Cantidad Incorrecto ".$CANTIDAD; break; }

      if(is_numeric(openssl_decrypt($_POST['valor'],COD,KEY))){
        $VALOR=openssl_decrypt($_POST['valor'],COD,KEY);
        $mensaje.="Ok, Valor correcto $ ".$VALOR;
      }else{
        $mensaje.="Algo malió sal, Valor Incorrecto ".$VALOR; break; }

      if(!isset($_SESSION['CARRITO'])){
        $producto=[
          'ID'=>$ID,
          'NOMBRE'=>$NOMBRE,
          'CANTIDAD'=>$CANTIDAD,
          'VALOR'=>$VALOR
        ];
        $_SESSION['CARRITO'][0]=$producto;
        
      }else{
        $NumeroProductos=count($_SESSION['CARRITO']);
        $producto=[
          'ID'=>$ID,
          'NOMBRE'=>$NOMBRE,
          'CANTIDAD'=>$CANTIDAD,
          'VALOR'=>$VALOR
        ];
        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
      }
      $mensaje=print_r($_SESSION,true);

    break;

    case 'Eliminar':
      if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        
        foreach($_SESSION['CARRITO'] as $indice=>$producto){

          if ($producto['ID']==$ID) {
            unset($_SESSION['CARRITO'][$indice]);
            echo "<script>alert('Item Eliminado.');</script>";
          }
        }        
      }else{
        $mensaje.="Algo malió sal, ID Incorrecto".$ID."<br>";
      }
    break;
  }
}

?>