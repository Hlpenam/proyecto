<?php
$dbhost="localhost";
$dbname="editinplace";
$dbuser="root";
$dbpass="";
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if (isset($_POST) && count($_POST)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		$query=$db->query("update editinplace set ".$_POST["campo"]."='".$_POST["valor"]."' where idusuario='".intval($_POST["id"])."' limit 1");
		if ($query) echo "<span class='ok'>Valores modificados correctamente.</span>";
		else echo "<span class='ko'>".$db->error."</span>";
	}
}

if (isset($_GET) && count($_GET)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		$query=$db->query("select * from editinplace order by idusuario asc");
		$datos=array();
		while ($usuarios=$query->fetch_array())
		{
			$datos[]=array(	"id"=>$usuarios["idusuario"],
							"nombre"=>$usuarios["nombre"],
							"apellidos"=>$usuarios["apellidos"],
							"email"=>$usuarios["email"],
							"telefono"=>$usuarios["telefono"]
			);
		}
		echo json_encode($datos);
	}
}
?>