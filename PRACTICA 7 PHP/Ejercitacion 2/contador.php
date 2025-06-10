<?php
if(isset($_COOKIE['contador'])) {
    // Si la cookie ya existe, incrementamos su valor
    $contador = $_COOKIE['contador'] + 1;
} else {
    // Si es la primera vez que se accede, inicializamos el contador
    $contador = 1;
}
?>
<!-- Crear una cookie llamada “contador” que lleve la cuenta en el lado cliente del número de veces que
se ha accedido a la página contador.php. Si es la primera vez que se accede, la página dará la
bienvenida al usuario. Si ya se ha accedido anteriormente, la página hará uso de la cookie para
mostrar el número de veces que se ha visitado dicha página -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Ingresos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contador de Ingresos</h1>
    </header>
    <main>
        <?php
        if (isset($_COOKIE['contador'])) {
            $contador = $_COOKIE['contador'] + 1;
        } else {
            $contador = 1;
        }

        
        setcookie('contador', $contador, time() + (86400 * 30));
        
        if ($contador == 1) {
        ?>
            <div class="welcome-message">
                <p>¡Bienvenido! Esta es tu primera visita a la página.</p>
            </div>
        <?php
        } else {
        ?>
            <div class="visit-count">
                <p>¡Bienvenido de nuevo!</p>
                <p>Has accedido a esta página <?= $contador ?> veces.</p>
            </div>
        <?php
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Contador de Ingresos</p>
    </footer>
    
</body>
</html>