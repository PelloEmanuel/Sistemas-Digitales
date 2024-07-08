<?php
    $nombre = $_POST['nombre'];
    $monto = $_POST['monto'];

    if ($monto == '>10000') {
        $mensaje = "Debe pagar un recargo.";
    } else {
        $mensaje = "No debe pagar un recargo.";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="tarjeta">
        <h1>Resultado</h1>
        <p>Nombre: <?php echo $nombre;?></p>
        <p>Monto adeudado: <?php echo $monto;?></p>
        <p><?php echo $mensaje;?></p>
    </div>
</body>
</html>