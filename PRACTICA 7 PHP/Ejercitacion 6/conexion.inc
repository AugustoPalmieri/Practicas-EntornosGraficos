<?php
$link = mysqli_connect("localhost", "root", "") or die("Problemas de conexión");
mysqli_select_db($link, "base2") or die("Error seleccionando base de datos");
?>
