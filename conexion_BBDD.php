<?php
$server="localhost";
$user="root";
$password="";


$mysqli=@mysqli_connect($server, $user, $password);


if (mysqli_connect_errno($mysqli)){

	echo ("Fallo en conexión a MySQL ".mysqli_connect_error()." ".mysqli_connect_errno());
	die ("Salir");
}

$BBDD="dmunozlluesma";

/*Usar BBDD*/

mysqli_select_db($mysqli, $BBDD);
?>