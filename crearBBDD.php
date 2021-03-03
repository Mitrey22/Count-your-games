<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssfinal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

$server="localhost";
$user="root";
$password="";


$mysqli=@mysqli_connect($server, $user, $password);


if (mysqli_connect_errno($mysqli)){

	echo ("Fallo en conexión a MySQL ".mysqli_connect_error()." ".mysqli_connect_errno());
	die ("Salir");
}

$consult="CREATE DATABASE IF NOT EXISTS DMunozLluesma;";

if (!$result=$mysqli->query($consult)){

	echo ("Error");
	echo ("Num error: ".$mysqli->errno."<br>");
	echo ("Error: ".$mysqli->error."<br>");
}

echo ("<a href='index.html'>Volver</a>");

?>
</body>
</html>