<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssfinal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

require ("conexion_BBDD.php");

$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$salida=$_REQUEST["salida"];
$compra=$_REQUEST["compra"];
$distribuidor=$_REQUEST["distribuidor"];
$tabla=$_REQUEST["tabla"];



$consulta="INSERT INTO juegos (ID, nombre, precio_salida, precio_compra, distribuidor) VALUES ('$id', '$nombre', '$salida', '$compra', '$distribuidor');";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}

switch ($tabla) 
	{
	case 'play':
		
		$consult="INSERT INTO plataforma_juego (ID_plataforma, ID_juego) VALUES ('1', '$id');";

		if (!$result=$mysqli->query($consult))
		{
			echo ("Fallo");
			echo ("Num error: ".$mysqli->errno."<br>");
			echo ("Error: ".$mysqli->error."<br>");
			exit;
		}
	break;

	case 'xbox':

		$consult="INSERT INTO plataforma_juego (ID_plataforma, ID_juego) VALUES ('2', '$id');";

		if (!$result=$mysqli->query($consult))
		{
			echo ("Fallo");
			echo ("Num error: ".$mysqli->errno."<br>");
			echo ("Error: ".$mysqli->error."<br>");
			exit;
		}
	break;

	case 'switch':
		
		$consult="INSERT INTO plataforma_juego (ID_plataforma, ID_juego) VALUES ('3', '$id');";

		if (!$result=$mysqli->query($consult))
		{
			echo ("Fallo");
			echo ("Num error: ".$mysqli->errno."<br>");
			echo ("Error: ".$mysqli->error."<br>");
			exit;
		}
	break;
	}

	echo ("<a href='index.html'>Volver</a>");
?>
</body>
</html>