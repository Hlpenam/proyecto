<?php // conexion a la base de datos por php
	$link =mysql_connect("localhost","root",""); //conexion ip o localhost, y usuario en este caso no hay contraseña pero podemos ingresar usuarios con contraseña en las comillas vacias
	
	if($link==true){ // si la variable link que hace la conexion es correcta no dirige a mysql
		mysql_select_db("sionweb2",$link); // se hace la seleccion de la  base de datos a la que queremos conectarnos
		
		//camegovp_academias base de datos en linea
	}else{
		echo "<script>alert('base de datos no conectada')</script>";
	}
?>
