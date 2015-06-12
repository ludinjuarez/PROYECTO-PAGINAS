<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>COMPRAS FARMAWEB</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>



<nav class="menu2">
	  <menu>
	    <li><a href="./tienda.php" class="selected">Inicio</a></li>
	    <li><a href="admin.php">Detalle de ventas</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login.php" >Login</a></li>
	    <li><a href="./registro.php" >Logout</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
<li><a href="index.php">Menu Principal</a></li>

	  </menu>
	</nav>








<body>
	<header>
		<img src="./imagenes/farmaweb.jpg" id="log">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png" id="logo">
			


			
		</a>
	</header>


	<section>	
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
			<img src="./productos/<?php echo $f['imagen'];?>" alt="..." class="img-circle">    
				<h4><span  class="label label-default"> <?php echo $f['nombre'];?> </span> </h4>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>" >ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		


<!--
<div>
<nav> 
  <ul  class="pagination" > 
    <li> 
      <a  href= "#"  aria-label= "Anterior" > 
        <span  aria-hidden= "true" > « </span> 
      </a> 
    </li> 
    <li><a   href= "login.php" > 1 </a></li> 
    <li><a  href= "#" > 2 </a></li> 
    <li><a  href= "#" > 3 </a></li> 
    <li><a  href= "#" > 4 </a></li> 
    <li><a  href= "#" > 5 </a></li> 
    <li> 
      <a  href= "#"  aria-label= "Siguiente" > 
        <span  aria-hidden= "true" > » </span> 
      </a> 
    </li> 
  </ul> 
</nav>   

</div>-->



<button class="btn btn-primary" type="button">
  Messages <span class="badge">compuwebumg</span>
</button>

 
		
	</section>






	
	
</body>
</html>