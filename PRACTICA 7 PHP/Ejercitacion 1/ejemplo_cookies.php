<?php
// Veo si recibo datos del formulario
if (isset($_POST["estilo"])) {
    // Estoy recibiendo un estilo nuevo, lo guardo en una cookie
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90)); // 90 días
} else {
    // Si no recibo el estilo, miro si hay una cookie creada
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies en PHP</title>
    <?php
    // Si hay un estilo definido, lo cargo como hoja de estilos
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($estilo) . '.css">';
    }
    ?>
</head>
<body>
    <h1>Ejemplo de uso de cookies</h1>
    <p>Ejemplo de uso de cookies en PHP para almacenar la hoja de estilos CSS que queremos utilizar para definir el aspecto de la página.</p>

    <form action="ejemplo_cookies.php" method="post">
        <label for="estilo">Selecciona el estilo que prefieres:</label><br>
        <select name="estilo" id="estilo">
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="negro">Negro</option>
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>
</body>
</html>
