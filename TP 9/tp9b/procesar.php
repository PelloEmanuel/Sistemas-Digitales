<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="formulario">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $nivel_estudio = $_POST['nivel_estudio'];

        echo "<h2>Nombre: $nombre</h2>";
        echo "<p>Tipo de estudios: $nivel_estudio</p>";
    } else {
        echo "<h2>No se han recibido datos del formulario.</h2>";
    }
    ?>
    <a href="formulario.html">Volver al formulario</a>
</div>
</body>
</html>
