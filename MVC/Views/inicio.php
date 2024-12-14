<?php
require '../Controllers/loginController.php';
session_start(); // Iniciar sesión
// Validar si hay sesión activa
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Views/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliblioteca Virtual</title>
    <link rel="stylesheet" href= "./css/inicio.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- HEADER -->
    <div class="header">
        <!-- DIV DEL MENU -->
        <div class="inicio">
            <!-- LOGO -->
            <div class="logo">
                <div class="imglogo"></div>
                <div class="nombreBiblioteca">
                    <h3>LibraryAdso</h3>
                </div>
            </div>
            <!-- BARRA DE BUSQUEDA -->
            <div class="barraBusqueda">
                <input class="cuadroP" name="busqueda" placeholder="Busqueda de libro">
                <button type="submit">Buscar</button>
            </div>
            <!-- DIV DE LA SESION -->
            <div class="sesion">
                <!-- NOMBRE DEL USUARIO -->
                <div class="sesionNombre">
                    <?php
                    echo '¡Hola '. htmlspecialchars($_SESSION['user_name']).'!';
                    ?>
                </div>
                <!-- CIERRE DE SESION -->
                <div class="cerrarSesion">
                    <?php
                    echo '<a href="../Controllers/cerrarSesion.php"> Cerrar sesión </a>';
                    ?>
                </div>
            </div>
        </div>
    </div>
        
    <!-- BANNER -->
     <div class="banner"></div>
     <!-- MENU DE OPCIONES -->
     <div class="opciones">
        <!-- CATALOGO -->
        <div class="menu2">
            <img src="../Img/Ibooks.png" alt="">
            <br> <br>
            <h2>Catalogos</h2>
            <br>
            <div class="ir"> <a href="#">ir</a> </div>
        </div>
        <!-- PRESTAMOS -->
        <div class="menu2">
            <img src="../Controllers/Img/Books(1).png">
            <br> <br>
            <h2>Prestamos</h2>
            <br>
            <div class="ir"> <a href="#">ir</a> </div>
        </div>
        <!-- RESERVAS -->
        <div class="menu2">
            <img src="../Controllers/Img/reserva.png" alt="">
            <br> <br>
            <h2>Reservas</h2>
            <br>
            <div class="ir"> <a href="#">ir</a> </div>
        </div>
     </div>

     <!-- TITLE -->
     <div class="title"> <h1>Libros más populares de las editoriales.</h1> </div>

     <!-- BOOKS -->
      <div class="books">
        <!-- LIBRO PRINCIPAL -->
        <div class="destacado">
            <div class="img">
                <!-- IMAGEN DE LA BASE DE DATOS -->
                <?php

                ?>
                <img src="../Controllers/Img/con tal de verte volar.jpg" alt="">
            </div>
            <div class="text">
                <?php echo $descripcion;?>
            </div>
        </div>
        <!-- RESTO DE LIBROS -->
        <div class="destacados">
            <!-- CON TAL DE VERTE VOLAR -->
            <div class="books_destacados">
                <img src="../Controllers/Img/con tal de verte volar.jpg" alt="">
                <h3>Autor: Miguel Gane</h3>
            </div>
            <!-- LA DIVINA COMEDIA -->
             
            <div class="books_destacados">
                <img src="../Controllers/Img/la divina comedia.jpg" alt="">
                <h3>Autor: Dante Alighieri</h3>
            </div>
            <!-- LATIDOS QUE NO DIJE -->
            <div class="books_destacados">
                <img src="../Controllers/Img/Latidos que no dije.jpg" alt="">
                <h3>Autor: Roos</h3>
            </div>
            <!-- LA METAMOROFSIS -->
            <div class="books_destacados">
                <img src="../Controllers/Img/metamorfosis.jpg" alt="">
                <h3>Autor: Franz Kafka</h3>
            </div>
            <!-- RETARATO DE DORYAN GRAY -->
            <div class="books_destacados">
                <img src="../Controllers/Img/retrato.jpg" alt="">
                <h3>Autor: Oscar wilde</h3>
            </div>
            <!-- DIARIO DE GREG -->
            <div class="books_destacados">
                <img src="../Controllers/Img/diario-de-greg--644x950.jpg" alt="">
                <h3>Autor: Jeff Kinney</h3>
            </div>
        </div>
    </div>
    
    <!-- PIE DE PAGINA  -->
    <div class="direccion">
        <h2 class="d">Direccion</h2>
        <p class="e"> Estamos fonseca, La Guajira </p>
        <p class="t"> telefono:311034134 </p>
        <p class="m">Email:Biblioteca@gmail.com</p>
    </div>

    <div class="direccion1">
        <h2 class="r">Redes-sociales</h2>
        <img src="../Controllers/Img/logo Facebook.png"  class="lf"  width="70" height="60"alt="logodefacebook "><br>
        <img src="../Controllers/Img/logo TwitterX.png"  class="lt"  width="70" height="60"alt="logodefacebook ">

        <p class="b">Biblioteca sena</p>
        <p class="s">Biblioteca_sena</p>

        
    </div>

    <div class="Horarios">
        <h2 class="h">Horarios</h2>
        <p>Horarios de atencion: 8:30 am a 6:00 pm<p></p><br>
        <p>De lunes a Viernes<p></p>
        
    </div>

</body>
</html>