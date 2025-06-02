<?php
include("conexion.inc");

$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

$vSql = "INSERT INTO Ciudades (ciudad, país, habitantes, superficie, tieneMetro)
         VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";

mysqli_query($link, $vSql) or die(mysqli_error($link));
echo "Ciudad agregada correctamente.<br>";
echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
