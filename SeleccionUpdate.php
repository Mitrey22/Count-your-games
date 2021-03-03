<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssfinal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="Updatejuego.php">
  <h1>SELECCIÓN DE JUEGO</h1>
  <p>
    <label for="listado"></label>
    <select name="listado" size="1" id="listado">
    
    <?php
   require ("conexion_BBDD.php");
   $consulta ="SELECT ID, nombre FROM juegos ;";
   $resultado=$mysqli->query($consulta);
    while ($fila = $resultado ->fetch_assoc()){
    $n=$fila["nombre"];
         echo ("<option value=".$fila['ID'].">".$n."</option>");}
    ?>
    </select>
  </p>
  <p>
    <input type="submit" name="ACCEDER" id="ACCEDER" value="Enviar" />
  </p>
  
</form>
</body>
</html>
