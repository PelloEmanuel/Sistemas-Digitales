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
    $mensaje = $_GET['mensaje'];
    echo "<h2>$mensaje</h2>";
    ?>
    <a href="formulario.html">Volver al formulario</a>
</div>
</body>
</html>
