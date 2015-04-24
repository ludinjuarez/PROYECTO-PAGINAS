<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Carrito de Compras</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>

	<section>
	<?php
		include 'conexion.php';

		$consulta = "SELECT * FROM productos" or die("Error en la consulta.." . mysqli_error($enlace));

         
         $result = mysqli_query($enlace, $consulta);

		/* $re=mysql_query("select * from productos")or die(mysql_error());*/
		/*while ($f=mysql_fetch_array($re)) {*/

		while($row = mysqli_fetch_array($result)){


		?>
		<div class="producto">
			<center>
				<img src="productos/<?php echo $row['imagen'];?>   "><br>
				<span><?php echo $row['nombre'];?></span><br>
				<a href="./detalles.php">ver</a>
			</center>
		</div>
	<?php
		}
	?>	
	</section>  

</body>
</html>