<?php
include("conexion.inc");
$id = $_POST['id'];

$vSql = "DELETE FROM Ciudades WHERE id = $id";
mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "Ciudad eliminada correctamente.<br>";
echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
