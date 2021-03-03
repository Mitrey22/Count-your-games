<?php
require ("conexion_BBDD.php");

$consult=$_REQUEST["radio"];

if ($consult=='insertar')
{
	require ("form_insert.html");
}
elseif ($consult=='modifi')
{
	require ("SeleccionUpdate.php");
}
elseif ($consult=='borrar')
{
	require ("borrarSeleccion.php");
}

?>