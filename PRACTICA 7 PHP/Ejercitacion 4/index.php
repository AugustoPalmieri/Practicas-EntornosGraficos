<?php
if (isset($_POST['titular'])) {
    $titularSeleccionado = $_POST['titular'];
    setcookie('titular', $titularSeleccionado, time() + (86400 * 30)); // 30 días
} elseif (isset($_COOKIE['titular'])) {
    $titularSeleccionado = $_COOKIE['titular'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico Interactivo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>El Periódico de Hoy</h1>
    <hr>

    <form action="index.php" method="post">
        <p>Selecciona el tipo de titular que deseas ver:</p>
        <input type="radio" name="titular" value="politica" id="politica" <?php if(isset($titularSeleccionado) && $titularSeleccionado == 'politica') echo 'checked'; ?>>
        <label for="politica">Noticia política</label><br>

        <input type="radio" name="titular" value="economia" id="economia" <?php if(isset($titularSeleccionado) && $titularSeleccionado == 'economia') echo 'checked'; ?>>
        <label for="economia">Noticia económica</label><br>

        <input type="radio" name="titular" value="deportes" id="deportes" <?php if(isset($titularSeleccionado) && $titularSeleccionado == 'deportes') echo 'checked'; ?>>
        <label for="deportes">Noticia deportiva</label><br>

        <button type="submit">Actualizar titular</button>
    </form>

    <hr>

    <?php
    if (!isset($titularSeleccionado)) {
        echo "<div class='notice'>
        <h2>Noticias Políticas</h2>
        <p>El Senado debate una nueva reforma constitucional.</p>
        </div>";
        echo "<div class='notice'>
        <h2>Noticias Económicas</h2>
        <p>El dólar alcanza un nuevo récord histórico.</p>
        </div>";
        echo "<div class='notice'>
        <h2>Noticias Deportivas</h2>
        <p>La selección nacional gana por goleada.</p>
        </div>";
    } else {
        switch ($titularSeleccionado) {
            case 'politica':
                echo "<div class='notice'><h2>Noticias Políticas</h2><p>El Senado debate una nueva reforma constitucional.</p></div>";
                break;
            case 'economia':
                echo "<div class='notice'><h2>Noticias Económicas</h2><p>El dólar alcanza un nuevo récord histórico.</p></div>";
                break;
            case 'deportes':
                echo "<div class='notice'><h2>Noticias Deportivas</h2><p>La selección nacional gana por goleada.</p></div>";
                break;
        }
    }
    ?>

    <hr>
    <a href="borrar_cookie.php">Borrar preferencia de titular</a>
</body>
</html>
