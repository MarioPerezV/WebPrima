<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php'
?>

<br>
<h3>Lista de carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])){ ?>

<table class="table table-light table_bordered">
    <tbody>
        <tr>
            <th width="40%">Descripci&oacute;n</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Valor</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center">$ <?php echo $producto['VALOR']?></td>
            <td width="20%" class="text-center">$ <?php echo number_format($producto['CANTIDAD']*$producto['VALOR'],0); ?></td>
            <td width="5%"> 

            <form action="" method="post">
            <input type="hidden" 
            name="id" 
            id="id" 
            value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>" >

              <button 
              class="btn btn-danger" 
              type="submit"
              name="btnAction"
              value="Eliminar">Eliminar</button></td>
            </form>  
            
        </tr>
        <?php $total=$total+($producto['CANTIDAD']*$producto['VALOR']); ?>

        <?php }?>

        <tr>
          <td colspan="3" align="right"><h3>Total</h3></td>
          <td align="right"><h3>$ <?php echo number_format($total,0); ?></h3></td>
          <td></td>
        </tr>
    </tbody>
</table>

<?php }else{ ?>
<div class="alert alert-succes">
  No hay productos en el carrito...
</div>
<?php }?>

<?php
include 'templates/pie.php'
?>