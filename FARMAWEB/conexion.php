<?php
	

/*$link = mysqli_connect("myhost","myuser","mypassw","mybd") or die("Error " . mysqli_error($link));*/


$enlace = mysqli_connect('localhost', 'root', '', 'carritocompras');

if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

 /*echo 'error'.mysqli_get_host_info($enlace) . "\n";  // MENSAJE DE ERROR   */



?>