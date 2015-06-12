<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/farmaweb.jpg" id="log">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png" id="logo">
		</a>
	</header>

	<nav class="menu2">
	  <menu>
	    <li><a href="./tienda.php">Inicio</a></li>
	    <li><a href="admin.php">Detalle de ventas</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login.php" >Login</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>

	  </menu>
	</nav>
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="detalles">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>">
				<h4><span class="label label-default"><?php echo $f['nombre'];?></span></h4>
				<H4><span class="label label-danger">Precio: <?php echo $f['precio'];?></span></H4>

				
				<a href="./carritodecompras.php?id=<?php  echo $f['id'];?>"> <input type="button" name="boton" value="AGREGAR AL CARRITO" class="btn btn-success" style="width:200px"/> </a>


			</center>
			</div>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>