<?php
require 'Conexion.php';
session_start(); // Iniciar sesión

// Verificar si los datos fueron enviados desde el formulario
if (isset($_POST['email']) && isset($_POST['passw']))
{
    $userEmail = $_POST['email'];
    $userpassword = $_POST['passw'];

    // Consulta a la base de datos
    $sql = 'SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?';
    $consulta = $conexion->prepare($sql);
    $consulta->execute([$userEmail, $userpassword]);

    // Validar si se encontró un usuario
    if ($datos = $consulta->fetchObject())
    {
        // Guardar información del usuario en la sesión
        $_SESSION['user_id'] = $datos->id;
        $_SESSION['user_name'] = $datos->nombre;
        $_SESSION['user_rol'] = $datos->rol;
        
    }
    else { echo 'USUARIO O CONTRASEÑA INCORRECTA'; }

} else { echo 'Error: Por favor ingrese su correo y contraseña.'; }
?>











































