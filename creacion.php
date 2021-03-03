<?php

if (isset($_REQUEST["BBDD"]))
{

	require ("crearBBDD.php");

}
if (isset($_REQUEST["tablas"]))
{

	require ("creartablaBBDD.php");

}

?>