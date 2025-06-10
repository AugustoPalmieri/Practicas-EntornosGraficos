<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Buscador de Canciones</title>
  <style>
    body { font-family: Arial; text-align: center; margin-top: 50px; }
    form { display: inline-block; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
  </style>
</head>
<body>
  <h2>Buscador de Canciones</h2>
  <form action="buscar.php" method="GET">
    <input type="text" name="termino" placeholder="Ingrese nombre de la canción" required>
    <input type="submit" value="Buscar">
  </form>
</body>
</html>
