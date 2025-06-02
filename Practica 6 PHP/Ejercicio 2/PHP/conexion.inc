<?php
$link = mysqli_connect("localhost", "root", "") or die("Error de conexión");
mysqli_select_db($link, "Capitales") or die("Error seleccionando la base de datos");
?>
