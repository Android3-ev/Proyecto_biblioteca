<?php
require 'Conexion.php';
// CARGA DE IMAGENES
// Ruta base del servidor
$ruta_base = "http://localhost/MVC/";

// Ruta relativa de la imagen obtenida de la base de datos
$ruta_imagen = "Img/con_tal_de_verte_volar.jpg";

// Generar la URL completa
$url_completa = $ruta_base . $ruta_imagen;
echo $url_completa;
?>

<img src="<?php echo $url_completa; ?>" alt="La Divina Comedia">
