<?php
setcookie('titular', '', time() - 3600); // Eliminar cookie
header("Location: index.php"); // Redirigir a la página principal
exit;
// ?>