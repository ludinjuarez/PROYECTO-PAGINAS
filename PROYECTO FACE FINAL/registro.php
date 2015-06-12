<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registrarse</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/login.jpg" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
		</a>
	</header>



<nav class="menu2">
	  <menu>
	    <li><a href="./tienda.php">Inicio</a></li>
	    <li><a href="admin.php">Admin</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login.php" >Login</a></li>
	    <li><a href="./registro.php" class="selected">Logout</a></li>
	   

	  </menu>
	</nav>
	<div> 
		<center><h2><span  class="label label-warning">Registrate par Realizar la Operacion</span></h2></center>
	</div>
	<section>

	<form id="formulario" method="post" action="registro.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="usuario">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" ><br>
		
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>

		<label for="password">Password</label><br>
		<input type="password" id="email" name="Password" placeholder="Password" ><br>

		<label for="password">Correo</label><br>
		<input type="text" id="password" name="Correo" placeholder="Correo" ><br>

		<input type="submit" name="aceptar" value="Registrar" class="aceptar">
	</form>
	<a href="login.php"> <input  id="aceptar"  type="submit" name="boton" value="login" class="btn btn-primary" style="width:100px"/></a>

	<?php 
include "conexion.php";
	
	if ($_POST[aceptar]) { 

    $Nombre=$_POST['Nombre'];
	$User=$_POST['Usuario'];
	$Pass=$_POST['Password'];
	$Correo=$_POST['Correo'];

	$query="INSERT INTO usuarios (Nombre,Usuario,Password,Correo) VALUES ('$Nombre','$User','$Pass','$Correo')";
	
	$resutado=mysql_query($query);




 if($resultado>0){ ?>
				<h1>Error al Guardar Cliente</h1>
				<?php }else{ ?> 
				<h1>Cliente Guardado</h1>		
			<?php	}
	 }
			
			
?>
<center><h1><span  class="label label-warning">para fines de Revision</span></h1></center>
<center><h2><span  class="label label-primary">usuario   	 ljuarez</span></h2></center>
<center><h2><span  class="label label-primary">contraseña    56483397</span></h2></center>
<center><h4><span  class="label label-warning">o crear su usuario</span></h4></center>





	</section>
</body>
</html>