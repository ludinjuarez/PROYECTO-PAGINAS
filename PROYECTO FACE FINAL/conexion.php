<?php
	$server="mysql.hostinger.es";
	$username="u149933509_ludin";
	$password="56483397";
	$db='u149933509_bd';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>