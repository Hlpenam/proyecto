<?php
	include("../../connect_db.php");
	//require_once "../../connect_db.php";
	$placa=$_POST['placa'];
	$color=$_POST['color'];
	$marca=$_POST['marca'];
	$estado=$_POST['estado'];
	$fecha_ingreso=$_POST['fechaingreso'];
	$fecha_salida=$_POST['fechasalida'];
	$observaciones=$_POST['observaciones'];
	$origen=$_POST['origen'];
	$query="INSERT INTO vehiculos (placa,color,marca,estado,fecha_ingreso,fecha_salida,observaciones,origen)
	VALUES('$placa','$color','$marca','$estado','$fecha_ingreso','$fecha_salida','$observaciones','$origen')";


	$req = (strlen($placa)*strlen($color)*strlen($marca)*strlen($estado)*strlen($fecha_ingreso)*strlen($fecha_salida)*strlen($observaciones)*strlen($origen)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan campos por diligenciar.

	if($req >0) {
		$sql=mysql_query("INSERT INTO vehiculos (placa,color,marca,estado,fecha_ingreso,fecha_salida,observaciones,origen)
	VALUES('$placa','$color','$marca','$estado','$fecha_ingreso','$fecha_salida','$observaciones','$origen')",$link);

		echo "Datos guardado";

		echo '<script>
			alert("Registro Exitoso");
			location.href="../createve.php";
		</script>';
		
			

	}else{
		echo "or";
	}
