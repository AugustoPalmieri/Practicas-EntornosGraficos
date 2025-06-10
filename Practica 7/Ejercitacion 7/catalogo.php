<?php
session_start();
require_once 'config.php';

$carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : [];

$result = $conn->query("SELECT * FROM catalogo ORDER BY producto ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Catálogo</title>
</head>
<body>
    <h2>Catálogo de productos</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['producto']); ?></td>
            <td><?php echo number_format($row['precio'], 2); ?></td>
            <td>
                <?php
                $key = md5($row['id']);
                if (!isset($carro[$key])) {
                    ?>
                    <a href="agregarcar.php?id=<?php echo $row['id']; ?>">Agregar</a>
                <?php } else { ?>
                    <a href="borrarcar.php?id=<?php echo $row['id']; ?>">Quitar</a>
                <?php } ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <p>
        <a href="vercarrito.php">Ver carrito</a>
    </p>
</body>
</html>
