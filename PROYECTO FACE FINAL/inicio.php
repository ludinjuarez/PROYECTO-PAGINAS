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
        <li><a data-target="#registro" data-toggle="modal" > Logout </a></li>
     
     
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


    

    <form id="formulario" method="post" action="login/verifica.php">
            <div class="container" align="center" > 
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 "  style="margin-top: 80px;">
                    <h2 class="btn-primary" align="center" style="width:300px">Reservacion de Consulta</h2>     



                    <p><input class="form-control" name="Usuario" type="text" autofocus required placeholder="Usuario"></input></p>
                    <p><input class="form-control"name="Password" type="password" required placeholder="Password"></input></p>




                    
       

       
  




                </div>
            </div>
           <div class="container" align="center">
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 "> 
                    <label class="checkbox" align="center">
                        <input type="checkbox" value="recordar"></input>
                        Recordar Contraseña
                     </label>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 ">
                    <p><button name="acepta" class="btn btn-md btn-danger btn-block" type="submit">Iniciar Sesion</button></p>
                      
                </div>
            </div>



    </form> 

    

    <div class="navbar navbar-fixed-bottom">
         
        <div class="col-sm-2 col-md-2 col-lg-2 col-sm-offset-9 col-md-offset-9 col-lg-offset-9">
            <button data-target="#registro" data-toggle="modal" class="btn btn-sm btn-info btn-block">Regístrate</button>
        </div>
    </div>

     <div id="registro" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 80px;">
        <div class="modal-dialog">
             <div class="modal=content">
                <div id="registro1" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h1>Reservacion de Consulta</h1></center>
                    </div>
                     
                     <div class="modal-body">
            <form id="formulario" method="post" action="inicio.php">
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

        <input type="submit" name="aceptar" value="Registrar" class="btn btn-primary">
    </form>
    <a href="index.php"> <input  id="aceptar"  type="submit" name="boton" value="menu" class="btn btn-success" style="width:100px"/></a>

    <?php 
   include "conexion.php";
    
    if ($_POST[aceptar]) { 

    $Nombre=$_POST['Nombre'];
    $User=$_POST['Usuario'];
    $Pass=$_POST['Password'];
    $Correo=$_POST['Correo'];

    $query="INSERT INTO usuarios (Nombre,Usuario,Password,Correo) VALUES ('$Nombre','$User','$Pass','$Correo')";
    
    $resutado=mysql_query($query);




 
     }
            
            
?>

 <?php 

     if($resultado>0){ ?>
                <h1>Error al Guardar Cliente</h1>
                <?php }else{ ?> 
                <h1>Cliente Guardado</h1>       
            <?php   } ?>
                        

                        </center>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>  
 
            
            


 </body>
 </html>