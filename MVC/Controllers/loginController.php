<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['passw']) && !empty($_POST['passw']))
{
    $userEmail = $_POST['email'];
    $userpassword = $_POST['passw'];
    include '../Models/Login.php';

    // VALIDAMOS SI EXISTE UNA SESION Y VALIDAMOS SU ROL PARA REDIRIGIRLO A UNA VISTA DISTINA
    if(isset($_SESSION['user_rol']))
    {
        //BIBLIOTECARIO
        if($_SESSION['user_rol'] === 'Bibliotecario')
        {
            // VISTA ADMINISTRADOR
            header('Location: ../Views/inicioAdmin.php');
            exit;
        }
        else
        {
            // VISTA ESTUDIANTE, DOCENTE, INVITADO
             header('Location: ../Views/inicio.php');
            exit;
        }
    }
}
// else{ echo'LOS CAMPOS NO PUEDEN IR VACIOS'; }
?>
