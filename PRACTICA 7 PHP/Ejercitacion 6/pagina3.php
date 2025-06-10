<?php
session_start();
?>
<html>
<head>
  <title>Página Principal</title>
</head>
<body>
<?php
if (isset($_SESSION['nombre'])) {
    echo "Bienvenido " . htmlspecialchars($_SESSION['nombre']);
} else {
    echo "No tiene permitido visitar esta página.";
}
session_destroy(); // Opcional: destruye la sesión después de mostrar el mensaje
?>
</body>
</html>
