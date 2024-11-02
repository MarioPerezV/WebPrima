<!-- PRIMER NICHO: Tecnología y electrónica -->
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php'
?>

	<br>
	<div class="alert alert-success">
			<?php echo $mensaje;?>
			<a href="#" class="badge badge-success">Ver Carrito</a>
	</div>
	<div class="row">
	<?php
		$sentencia=$pdo->prepare("SELECT * FROM productos");
		$sentencia->execute();
		$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia2=$pdo->prepare("SELECT valor FROM productos");
		//print_r($listaProductos);
	?>
	<?php foreach($listaProductos as $producto){ ?>
    	<div class="col-4">
		  <div class="card">
			<img 
			title="<?php echo $producto['nombre'];?>" 
			alt="<?php echo $producto['nombre'];?>" 
			class="card-img-top" 
			src="<?php echo $producto['imagen'];?>"
			data-toggle="popover"
			data-trigger="hover"
			data-content="<?php echo $producto['descripcion'];?>">

			<div class="card-body">
			<span><?php echo $producto['nombre'];?></span>
				<h5 class="card-title">$ <?php echo $producto['valor'];?></h5>
				<p class="card-text">Descripcion</p>

				<form action="" method="post">
				<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>" >
				<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>" >
				<input type="hidden" name="valor" id="valor" value="<?php echo openssl_encrypt($producto['valor'],COD,KEY);?>">
				<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt($producto['1'],COD,KEY);?>">

				<button class="btn btn-primary" 
				name="btnAccion" 
				value="Agregar" 
				type="submit">
				Subir al Carro</button>
				</form>
			</div>
		</div>
	</div>	
	<?php	} ?>
</div>
<script>
  $(function(){
    $('[data-toggle="popover"]').popover();
  });
</script>

<?php
include 'templates/pie.php';
?>