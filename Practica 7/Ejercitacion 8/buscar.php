<?php
include("conexion.php");

$termino = $_GET['termino'];

$sql = "SELECT * FROM buscador WHERE canciones LIKE ?";
$stmt = $conn->prepare($sql);
$buscar = "%$termino%";
$stmt->bind_param("s", $buscar);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados</title>
  <style>
    body { font-family: Arial; text-align: center; margin-top: 50px; }
    ul { list-style-type: none; padding: 0; }
    li { background: #f2f2f2; margin: 10px auto; padding: 10px; width: 300px; border-radius: 6px; }
    a { display: block; margin-top: 20px; }
  </style>
</head>
<body>
  <h2>Resultados de búsqueda para: <em><?php echo htmlspecialchars($termino); ?></em></h2>

  <?php if ($resultado->num_rows > 0): ?>
    <ul>
      <?php while ($fila = $resultado->fetch_assoc()): ?>
        <li><?php echo htmlspecialchars($fila['canciones']); ?></li>
      <?php endwhile; ?>
    </ul>
  <?php else: ?>
    <p>No se encontraron canciones con ese término.</p>
  <?php endif; ?>

  <a href="index.php">← Volver</a>
</body>
</html>
