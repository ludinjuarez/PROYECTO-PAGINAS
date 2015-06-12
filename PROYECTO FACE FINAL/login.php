<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/login.jpg" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>



<nav class="menu2">
	  <menu>
	    <li><a href="./tienda.php">Inicio</a></li>
	    <li><a href="admin.php">Admin</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login.php" >Login</a></li>
	   

	  </menu>
	  <div> 
		<center><h2><span  class="label label-primary">Ingrese sus datos</span></h2></center><br>
	</div>
	</nav>
	<section>

	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="Contraseña" ><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>


	
	</section>
	<center><h1><span  class="label label-warning">para fines de Revision</span></h1></center>
<center><h2><span  class="label label-primary">usuario:   	 ljuarez</span></h2></center>
<center><h2><span  class="label label-primary">password:    56483397</span></h2></center>
<center><h4><span  class="label label-warning">o crear su usuario</span></h4></center>
</body>
</html>