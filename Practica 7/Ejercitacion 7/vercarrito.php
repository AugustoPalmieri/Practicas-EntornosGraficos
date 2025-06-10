<?php
session_start();
$carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : [];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h2>Carrito de Compras</h2>
    <?php if (!empty($carro)): ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acción</th>
            </tr>
            <?php foreach ($carro as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['producto']); ?></td>
                    <td><?php echo number_format($item['precio'], 2); ?></td>
                    <td><?php echo $item['cantidad']; ?></td>
                    <td><?php echo number_format($item['cantidad'] * $item['precio'], 2); ?></td>
                    <td><a href="borrarcar.php?id=<?php echo $item['id']; ?>">Eliminar</a></td>
                </tr>
                <?php $total += $item['cantidad'] * $item['precio']; ?>
            <?php endforeach; ?>
        </table>
        <p><strong>Total: $<?php echo number_format($total, 2); ?></strong></p>
        <p><a href="catalogo.php">Seguir comprando</a></p>
    <?php else: ?>
        <p>No hay productos en el carrito.</p>
        <a href="catalogo.php">Ir al catálogo</a>
    <?php endif; ?>
</body>
</html>
