<?php
session_start();
?>
<html>
<head>
  <title>Procesando usuario</title>
</head>
<body>
<?php
include("conexion.inc");

$mail = $_POST['mail'] ?? '';

// SQL para buscar el mail en la tabla alumnos
$vSql = "SELECT * FROM alumnos WHERE mail = '$mail'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if(mysqli_num_rows($vResultado) == 0) {
    echo "Usuario inexistente...!!! <br>";
    echo '<a href="sesiones.php">Volver</a>';
} else {
    $fila = mysqli_fetch_array($vResultado);
    $_SESSION['nombre'] = $fila['nombre']; // Guarda el nombre en la sesión
    echo "Usuario encontrado.<br>";
    echo '<a href="pagina3.php">Ingresar a página principal</a>';
}
?>
</body>
</html>
