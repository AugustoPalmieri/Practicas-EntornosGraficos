<?php
include("conexion.inc");
$id = $_POST['id'];

$vSql = "SELECT * FROM Ciudades WHERE id = $id";
$vResultado = mysqli_query($link, $vSql);
$fila = mysqli_fetch_array($vResultado);

if (!$fila) {
  echo "Ciudad no encontrada.<br><a href='FormModiIni.html'>Intentar otra vez</a>";
} else {
?>
<form action="Modi.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
  Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
  País: <input type="text" name="pais" value="<?php echo $fila['país']; ?>"><br>
  Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
  Superficie: <input type="text" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
  Tiene Metro (1/0): <input type="number" name="tieneMetro" value="<?php echo $fila['tieneMetro']; ?>"><br>
  <input type="submit" value="Modificar">
</form>
<?php
}
mysqli_close($link);
?>
