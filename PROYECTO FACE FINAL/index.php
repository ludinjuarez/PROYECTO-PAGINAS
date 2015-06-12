<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script  type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="estiloServicios.css">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>









<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"> </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="Img/farmaweb.jpg">Logotipo</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="Tienda.php">Tienda</a></li>
      <li><a href="inicio.php">Reserar Consulta</a></li>
       <li><a data-target="#contacto" data-toggle="modal" >Contacto</a></li>
       <li><a data-target="#historial" data-toggle="modal" >Cita  </a></li>
       
     
    </ul>
 
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="">Contactanos</a></li>
      <li class="dropdown">
        </a>
       
      </li>
    </ul>
  </div>
</nav>
























<body id="bodyServicios">
<p>
	

</p>
<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="sidebar">
				
			</div>

 <div>
	<div id="cuerpo"  class="col-sm-10 col-md-10 col-lg-10">
		<div class="panel panel-default">
			<div id="barraLateral" class="panel-heading">
				<div class="panel-title">
				  <center>
							<ul>
						       <a href="">
							    <img  class="iconos" src="home.ico" width="50" height="50">
						       </a>
								<a href="">
								<img class="iconos" src="info.ico" width="50" height="50">
								</a>
								
								<a href="https://www.google.com/maps/place/Universidad+Mariano+G%C3%A1lvez+de+Guatemala/@14.658948,-90.513378,17z/data=!3m1!4b1!4m2!3m1!1s0x8589a209e1ffbfdd:0x12b0303b26e4ecd6">
								<img class="iconos" src="maps.ico" width="50" height="50">
								</a>
							</ul>
				   </center>
				 </div>
			 </div>
			 <div class="panel-body">				
				<ul class="grid efecto-hover">
					<li>
						<figure>
							<img class="foto" src="Img/reservaciones.png" alt="img01" width="450" height="250">
							<figcaption>
								<h3>Reservacion de Consultas</h3>
            					<a href="inicio.php"> servicios </a>
							</figcaption>
						</figure>|
					</li>
					<li>
						<figure>
							<img class="foto" src="Img/tienda.png" alt="img01" width="450" height="250">
							<figcaption>
								<h3>Tienda Online</h3>
            					<a href="tienda.php"> servicios </a>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img class="foto" src="Img/contacto.jpg" alt="img01" width="450" height="250">
							<figcaption>
								<h3>Contactanos</h3>
            					<button data-target="#contacto" data-toggle="modal" class="btn btn-danger btn-md">Solicitar</button>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img class="foto" src="Img/historial.jpg" alt="img01" width="450" height="250">
							<figcaption>
								<h3>Consultar de cita</h3>
            					<button data-target="#historial" data-toggle="modal" class="btn btn-danger btn-md">Solicitar</button>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="ReservacionConsulta" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 30px;">
    <div class="modal-dialog">
        <div class="modal=content">
            <div id="servicio1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>Reservacion de Consulta</center>
                  </div>
                	<div class="modal-body">
                    	 <center>
						  <img class="foto" src="Img/reservacion1.jpg" alt="img01" width="450" height="300">
                    	 </center>
						<form class="form-register" role="form" method="POST" action="ingresocliente.php">
							<center>
	                            <p><input class="form-control" type="text" autofocus="" required="" placeholder="Nombre"></input></p>
	                            <p><input class="form-control" type="text" autofocus="" required="" placeholder="Direccion"></input></p>
	                            <p><input class="form-control" type="text" autofocus="" required="" placeholder="Edad"></input></p>
								<p><input class="form-control" type="text" autofocus="" required="" placeholder="Sexo"></input></p> 
								<p><input class="form-control" type="text" autofocus="" required="" placeholder="Telefono"></input></p>
    	   				    </center>
                            <center>
                            	<button data-target="#DetallesConsulta" data-toggle="modal" class="btn btn-success btn-sm">Registrar</button>
                            </center>

                   		</form>

                	</div>
                		<div class="modal-footer">
                   		   <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                		</div>
                  </div>    
            	</div>
        	</div>
    	</div>
	</div>  
	</div>



	<div id="DetallesConsulta" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 30px;">
    <div class="modal-dialog">
        <div class="modal=content">
            <div id="servicio1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>Detalles consulta</center>
                  </div>
                	<div class="modal-body">
                    	 
						<form class="form-register" role="form">
							<table>
								
							<td><strong>Area</strong></td>
									
								<tr>
									<td><input type="checkbox" name="aceptar[]" value="4">  </td><td>Traumatologia</td>
									
								</tr>
								<tr>
									<td><input type="checkbox" name="aceptar[]" value="4">  </td><td>Traumatologia</td>
									
								</tr>
								<tr>
									<td><input type="checkbox" name="aceptar[]" value="4">  </td><td>Traumatologia</td>
									
								</tr>	
                      		</table>


                      		<tr>
                      			<td><strong>Fecha</strong></td>
                      			<td><input type="date" name="Fecha" class="CajaTexto" size="30" x-webkit-speech="true" required=""/></td>

                      		</tr>

                      		<tr>
                      			<td><strong>Hora</strong></td>
                      			<td><input type="time" name="Hora" class="CajaTexto" size="30" x-webkit-speech="true" required=""/></td>

                      		</tr>

                      		<tr>
                      			<td><strong>Medico</strong></td>
                      			<td><input type="combobox" name="" class="CajaTexto" size="30" x-webkit-speech="true" required=""/></td>

                      		</tr>










                            	<button data-target="#DetallesConsulta" data-toggle="modal" class="btn btn-success btn-sm">Reservar</button>
                   		 </form>
                	</div>
                		<div class="modal-footer">
                   		   <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                		</div>
                  </div>    
            	</div>
        	</div>
    	</div>
	</div>  
	</div>














	<div id="contacto" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 30px;">
        <div class="modal-dialog">
             <div class="modal=content">
                <div id="servicio1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>Contactanos</center>
                    </div>
                     
                     <div class="modal-body">
                        <center>
						<img class="foto" src="Img/contacto2.png" alt="img01" width="200" height="150">
                        </center>
					
                        <form class="form-register" role="form" method="post" action="contactoin.php">
                            <p><input class="form-control" name="nombre" type="text" autofocus="" required="" placeholder="Nombre"></input></p>
                            <p><input class="form-control" name="correo" type="email" autofocus="" required="" placeholder="Correo Electronico"></input></p>
                            <p><input class="form-control" name="asunto" type="text" required="" placeholder="Asunto"></input></p>
                            
                      	<p><label>
                      	Estaremos contactandote muy pronto
                      	</label></p>
                            <center>
                            <button name="conta" class="btn btn-default">Continuar</button>
                            </center>
                        </form>
        



                        </center>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
     </div>  


	<div id="historial" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 30px;">
        <div class="modal-dialog">
             <div class="modal=content">
                <div id="servicio1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>Consulta de Cita</center>
                    </div> 
                    <div class="modal-body">
                       <center>
					     <img class="foto" src="Img/historial1.jpg" alt="img01" width="200" height="150">
                       </center>

							
<form id="formulario" method="post" action="consultar.php">
        <?php 
        if(isset($_GET['error'])){
            echo '<center>Datos No Validos</center>';
        }
        ?>
        <label  for="usuario">Codigo</label>
        <input type="text" id="nombre" name="nombre" placeholder="codigo de reservacion" class="form-control">
        
        

        <input type="submit" name="acept" value="Registrar" class="btn btn-primary" class="form-control">
    </form>

  

          		    </div>
					     <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                         </div>
                </div>
            </div>
        </div>
	 </div>
 </div>




</body>
</html>