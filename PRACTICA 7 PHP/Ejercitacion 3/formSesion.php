<!-- Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón
crear una cookie para dicho usuario. Luego cada vez que ingrese al formulario mostrar el último
nombre de usuario ingresado. -->
<?php
// Si se envió el formulario, guardar el nombre en una cookie
if (isset($_POST['usuario'])) {
    $nombreUsuario = $_POST['usuario'];
    setcookie("usuario", $nombreUsuario, time() + (86400 * 30));
} elseif (isset($_COOKIE['usuario'])) {
    // Si ya hay una cookie, recuperar el nombre
    $nombreUsuario = $_COOKIE['usuario'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Registro de Sesiones</h1>
    </header>

    <main>
        <?php if (isset($nombreUsuario)) : ?>
            <p><strong>Último usuario ingresado:</strong> <?= htmlspecialchars($nombreUsuario) ?></p>
        <?php endif; ?>

        <form action="formSesion.php" method="post">
            <label for="usuario">Nombre de usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <button type="submit" >Guardar nombre</button>
        </form>
    </main>

    <footer>
        <h3>2025 Ejercitación 3</h3>
    </footer>
</body>
</html>
