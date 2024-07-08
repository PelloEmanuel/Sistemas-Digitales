<?php
    $nombre = $_POST['nombre'];
    $deportes = $_POST['deportes'];

    $cantidadDeportes = count($deportes);
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
        <p>Cantidad de deportes: <?php echo $cantidadDeportes;?></p>
        <p>Deportes: 
        <?php
            foreach ($deportes as $deporte) {
                echo "$deporte, ";
            }
       ?>
        </p>
    </div>
</body>
</html>