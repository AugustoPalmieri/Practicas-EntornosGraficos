<?php
include("conexion.inc");

$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

$vSql = "UPDATE Ciudades SET ciudad='$ciudad', país='$pais', habitantes=$habitantes,
         superficie=$superficie, tieneMetro=$tieneMetro WHERE id=$id";

mysqli_query($link, $vSql) or die(mysqli_error($link));
echo "Ciudad modificada correctamente.<br>";
echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
