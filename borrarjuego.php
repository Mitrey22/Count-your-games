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

$id=$_REQUEST["listado"];

$consult="DELETE FROM plataforma_juego WHERE ID_juego='$id';";

if (!$resultado=$mysqli->query($consult))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  }

$consulta ="DELETE FROM juegos WHERE ID='$id';";
   $resultado=$mysqli->query($consulta);

    
if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } 
 else{ echo ("Registro Borrado<br>"); }

echo ("<a href='index.html'> Volver</a>");

?>
</body>
</html>