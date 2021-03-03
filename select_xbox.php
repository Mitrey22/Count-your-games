<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="cssselect.css" rel="stylesheet" type="text/css" />
</head>

<body id="xboxbody">

<h2>JUEGOS DE XBOX</h2>
<figure>
<img src="Xbox1.png">
</figure>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio de salida</th>
            <th>Precio de compra</th>
            <th>Distribuidor</th>
        </tr>
        </thead>
        <tbody>
        <?php

          require ("conexion_BBDD.php");

          $consulta="SELECT juegos.* FROM juegos INNER JOIN plataforma_juego ON juegos.ID=plataforma_juego.ID_juego INNER JOIN plataforma ON plataforma_juego.ID_plataforma=plataforma.ID WHERE plataforma.nombre='xbox';";

          if (!$result=$mysqli->query($consulta))
          {
            echo ("Fallo");
            echo ("Num error: ".$mysqli->errno."<br>");
            echo ("Error: ".$mysqli->error."<br>");
            exit;
          }

          $numero_registros=$result->num_rows;
          echo ("Hay un total de $numero_registros juegos </br>");

          while ($fila=$result->fetch_assoc())
              {
                echo ("<tr><td>".$fila["ID"]."</td>");
                echo ("<td>".$fila["nombre"]."</td>");
                echo ("<td>".$fila["precio_salida"]."</td>");
                echo ("<td>".$fila["precio_compra"]."</td>");
                echo ("<td>".$fila["distribuidor"]."</td></tr>");
              }

            echo ("<a href='index.html'>Volver</a>");

          ?>
        <tbody>
    </table>
</div>

</body>
</html>