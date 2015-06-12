<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{

		//header("Location:./index.php?Error=Acceso denegado");
		header("Location:./registro.php");

	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<header>
		<img src="imagenes/login.jpg" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
	<center><h1><span  class="label label-warning">Usuario Registrado con Exito presione el boton</span></h1></center>
	<a href="./tienda.php?id=<?php  echo $f['id'];?>"> <input type="button" name="boton" value="Tienda" class="btn btn-primary" style="width:200px"/> </a>
	<nav class="menu2">
	  <menu>
	    <li><a href="./tienda.php">Inicio</a></li>
	    <li><a href="admin.php" class="selected">Detalle de ventas</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login.php" >Login</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>

	  </menu>
	</nav>

	<center><h1>Detalle de Ventas</h1></center>
	<table border="2px" width="100%" class="table table-striped">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	

		<?php
			$re=mysql_query("select * from compras");
		//$re=mysql_query("select *from compras WHERE Id=26");
		
		
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {


					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Numero: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];

					echo '<tr>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>