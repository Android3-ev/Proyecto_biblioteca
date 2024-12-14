<?php
session_start();
session_unset(); // Limpiar todas las variables de sesión
session_destroy(); // Destruir la sesión
header('Location: ../Views/login.php'); // Redirigir al formulario de login
exit;
?>
