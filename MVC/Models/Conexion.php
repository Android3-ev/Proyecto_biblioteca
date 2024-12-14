<?php
// CARGAMOS EL ARCHIVO CON LOS DATOS DE CONEXION
require_once 'Config.php';

// VALIDAMOS LOS ERRORES Y LAS EXCEPCIONES CON TRY Y CATCH
try{
    $conexion = new PDO($dsn,$username,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "ERROR: " . $e->getMessage();
}


