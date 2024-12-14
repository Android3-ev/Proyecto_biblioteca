<head>
    <title>Biblioteca</title>
    <link rel="stylesheet" href="./css/loginCSS.css">
</head>

<body>

    <!-- FONDO -->
    <div class="fondo"></div>

    <!-- CONTENEDOR DEL FORMULARIO -->
    <div class="contenedor">
        <h1>BIBLIOTECA VIRTUAL</h1>
        
        <!-- FORMULARIO DE AUTENTICACION -->
        <form action="../Controllers/loginController.php" method="POST">

            <!-- CAMPO DE TEXTO PARA EL EMAIL -->
            <input id="email" name= "email" type="email" placeholder="Username" required>

            <!-- CAMPO DE TEXTO PARA LA CONTRASEÑA -->
            <input id="password" name= "passw" type="password" placeholder="Password" required>

            <!-- BOTON DE ENVIO -->
             <button type="submit" id="buttom">Ingresar</button>

            <!-- INGRESO COMO INVITADO -->
            <a href="../Views/inicio.php"><h3>Ingresar como invitado</h3></a>
        </form>
    </div>
   
    
</body>
</html>