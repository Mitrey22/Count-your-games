<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssfinal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

require "conexion_BBDD.php";

//tabla plataforma
$consulta="CREATE TABLE IF NOT EXISTS plataforma ";
$consulta.="(ID INT(3), ";
$consulta.="nombre VARCHAR(30), ";
$consulta.="distribuidor VARCHAR(80), ";
$consulta.="PRIMARY KEY (ID)) ";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}


$consulta="INSERT INTO plataforma (ID, nombre, distribuidor) VALUES ('1', 'Playstation', 'Sony'), ('2', 'Xbox', 'Microsoft'), ('3','Nintendo Switch', 'Nintendo');";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}






// tabla juegos
$consulta="CREATE TABLE IF NOT EXISTS juegos ";
$consulta.="(ID INT(3), ";
$consulta.="nombre VARCHAR(80), ";
$consulta.="precio_salida float, ";
$consulta.="precio_compra float, ";
$consulta.="distribuidor VARCHAR(80), ";
$consulta.="PRIMARY KEY (ID)) ";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}

$consulta="INSERT INTO juegos (ID, nombre, precio_salida, precio_compra, distribuidor) VALUES ('1', 'Horizon Zero Dawn', '65', '45.6', 'Gerrilla'), ('2', 'Nier: Automata', '65', '46.9', 'Square Enix'), ('3', 'Wach Dogs', '58', '12.8', 'Ubisoft'), ('4', 'Wach Dogs 2', '58', '47', 'Ubisoft'), ('5', 'Assassins Creed Origins', '54', '54', 'Ubisoft'), ('6', 'Fifa 20', '60', '60', 'EA'), ('7', 'Monster Hunter World', '57', '47.8', 'Capcom'), ('8', 'Pokemon Sword', '60', '60', 'Nintendo'), ('9', 'Mario Kart 8', '56', '43', 'Nintendo'), ('10', 'Zelda Breath of the Wild', '68', '60', 'Nintendo'), ('11', 'Super Mario Odisey', '60', '60', 'Nintendo'), ('12', 'Luigis mansion 3', '62', '62', 'Nintendo'), ('13', 'Read Dead Redemption 2', '72', '60', 'Rockstar Games'), ('14', 'Destini 2', '59', '56', 'Bungie Studios'), ('15', 'Anthem', '65', '46.9', 'Bioware');";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}







// tabla plataforma_juegos, tabla de conexión entre las dos anteriores ya que es una relación N:M
$consulta="CREATE TABLE IF NOT EXISTS plataforma_juego ";
$consulta.="(ID_plataforma INT(3), ";
$consulta.="ID_juego INT(3), ";
$consulta.="PRIMARY KEY (ID_plataforma, ID_juego), ";
$consulta.="CONSTRAINT fk_plataforma FOREIGN KEY (ID_plataforma) REFERENCES plataforma(ID), ";
$consulta.="CONSTRAINT fk_juegos FOREIGN KEY (ID_juego) REFERENCES juegos(ID));";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}


$consulta="INSERT INTO plataforma_juego (ID_plataforma, ID_juego) VALUES ('1', '1'), ('1', '2'), ('1', '3'), ('1', '4'), ('1', '5'), ('1', '6'), ('1', '7'), ('1', '13'), ('2', '13'), ('2', '14'), ('2', '15'), ('3', '8'), ('3', '9'), ('3', '10'), ('3', '11'), ('3', '12');";

if (!$result=$mysqli->query($consulta))
{
	echo ("Fallo");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
	exit;
}




echo ("<a href='index.html'>Volver</a>");

?>

</body>
</html>