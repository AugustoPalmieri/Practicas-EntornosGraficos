<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Login</title>
  <style>
    body { font-family: Arial; text-align: center; margin-top: 50px; }
    form { display: inline-block; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
  </style>
</head>
<body>
  <h2>Ingrese sus datos</h2>
  <form action="guardar.php" method="POST">
    <label>Nombre de usuario:</label><br>
    <input type="text" name="usuario" required><br><br>
    
    <label>Clave:</label><br>
    <input type="password" name="clave" required><br><br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
