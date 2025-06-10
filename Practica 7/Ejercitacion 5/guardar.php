<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];


header("Location: mostrar.php");
exit();
?>
