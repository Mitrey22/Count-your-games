<?php

require ("conexion_BBDD.php");


$plat=$_REQUEST["plat"];

	switch ($plat) 
	{
	case 'play':
		require ("select_play.php");
	break;

	case 'xbox':
		require ("select_xbox.php");
	break;

	case 'switch':
		require ("select_switch.php");
	break;
	}

?>
