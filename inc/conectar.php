<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(!($conexion=mysql_connect('localhost','root','')))
	die("Error: No se pudo conectar al servidor.");
	//Seleccionamos la base de datos con la que vamos a trabajar
if(!mysql_select_db('proyectopasarela',$conexion))
	die("Error: No se puede conectar a la base de datos");
?>
