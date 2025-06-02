<?php
include("conexion.inc");
$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql);
echo "<table border='1'><tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Metro</th></tr>";
while ($fila = mysqli_fetch_array($vResultado)) {
  echo "<tr>
    <td>{$fila['id']}</td>
    <td>{$fila['ciudad']}</td>
    <td>{$fila['país']}</td>
    <td>{$fila['habitantes']}</td>
    <td>{$fila['superficie']}</td>
    <td>{$fila['tieneMetro']}</td>
  </tr>";
}
echo "</table><a href='Menu.html'>Volver</a>";
mysqli_close($link);
?>
