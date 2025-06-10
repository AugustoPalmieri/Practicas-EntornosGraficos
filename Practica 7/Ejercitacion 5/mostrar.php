<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos en sesión</title>
  <style>
    body { font-family: Arial; text-align: center; margin-top: 50px; }
    .datos { background: #f2f2f2; padding: 20px; border-radius: 8px; display: inline-block; }
  </style>
</head>
<body>
  <h2>Datos almacenados en sesión</h2>
  <div class="datos">
    <p><strong>Usuario:</strong> <?php echo $_SESSION['usuario']; ?></p>
    <p><strong>Clave:</strong> <?php echo $_SESSION['clave']; ?></p>
  </div>
</body>
</html>
