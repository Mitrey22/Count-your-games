<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssfinal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="Update.php">
  <h1>FORMULARIO DE MODIFICACIÓN</h1>
  <p>
    <label for="id">ID del juego:</label>
    <input type="text" name="id" id="id" value="<?php echo($_REQUEST['listado']);?>"/>
  </p>
  <p>
   <?php
   require ("conexion_BBDD.php");
   $id=$_REQUEST["listado"];
   $consulta ="SELECT ID, nombre, precio_salida, precio_compra, distribuidor  FROM juegos  where ID ='$id';";
   if (!$resultado=$mysqli->query($consulta))
    {echo "Lo sentimos. La Aplicación no funciona<br>";
     echo "Error. en la consulta: ".$consulta."<br>";
     echo "Num.error: ".$mysqli->errno."<br>";
     echo "Error: ".$mysqli->error. "<br>";
     exit;
    }   
    echo ("<br>");
   $resultado=$mysqli->query($consulta);
    while ($fila= $resultado->fetch_assoc()){
         echo ("<label for='nombre'>Nombre </label> <input type='text' name='nombre' id='nombre' value='".$fila['nombre']."' />  </p>");
         echo ("<label for='salida'>Precio de salida del juego </label> <input type='text' name='salida' id='salida' value='".$fila['precio_salida']."' />  </p>");
         echo ("<label for='compra'>Precio de compra del juego </label> <input type='text' name='compra' id='compra' value='".$fila['precio_compra']."' />  </p>");
        echo ("<label for='distribuidor'>Distribuidor </label> <input type='text' name='distribuidor' id='distribuidor' value='".$fila['distribuidor']."' />  </p>");
      }
   ?>
    <input type="submit" name="enciar" id="enciar" value="Modificar" />
  </p>
</form>

</body>

</html>
