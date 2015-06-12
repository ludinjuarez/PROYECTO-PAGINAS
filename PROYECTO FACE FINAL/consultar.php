
		<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estiloInicio.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <title>Inicio SIT</title>
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
      <li class="active"><a href="index.php">Menu</a></li>
        
     
     
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
<body id="body1">

<nav id="barratop" class="navbar navbar-default navbar-inverse"></nav>


    
    
            <div class="container" align="center" > 
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 "  style="margin-top: -10px;">
                    <h2 class="btn-primary" align="center" style="width:300px">Consulta</h2>     






		
							
    <?php 
   include "conexion.php";
    
   
$num=$_POST['nombre'];
   
		
	$re=mysql_query("SELECT nombre,telefono,sintoma,fe FROM reservacion WHERE codigo='$num'");
 
		?>
		<table  border="2"  class="table table-striped">
		<head>
        <TR>
			<td>NOMBRE</td>
			<td>TELEFONO</td>
			<td>SINTOMA</td>
			<td>FECHA</td>
			
		</TR>
		</head>
		
		<?PHP while ($f=mysql_fetch_array($re)) { ?>
	
        <TR>
        
        
			<td><?PHP echo $f['nombre'];  ?></td>
			<td><?PHP echo $f['telefono'];  ?></td>
			<td><?PHP echo $f['sintoma'];  ?></td>
			<td><?PHP echo $f['fe'];  ?></td>
		
			
		</TR>
		 </table><?PHP  		

			}

		?>
   




                </div>


            </div>
           <div class="container" align="center">
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 "> 


                  
                     
                     </label>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 ">
               
                </div>
            </div>


   
  



    <div class="navbar navbar-fixed-bottom">
         
        <div class="col-sm-2 col-md-2 col-lg-2 col-sm-offset-9 col-md-offset-9 col-lg-offset-9">
   
        </div>
    </div>

     <div id="registro" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 80px;">
        <div class="modal-dialog">
             <div class="modal=content">
                <div id="registro1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                    <div class="modal-header">

                        



                    </div>
                     
                     <div class="modal-body">








                        

                        </center>
                    </div>
                        <div class="modal-footer">
                          
                        </div>
                </div>
            </div>
        </div>
    </div>  

 </body>
 </html>




       
            
