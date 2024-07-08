<!DOCTYPE html>
<html>
<head>
    <title>Elemento de un Array</title>
</head>
<body>
    <?php
    $importe = array(10.5, 20.3, 15.8, 8.2);
    $indice = 1;
    ?>

    <h2>Elemento con índice <?php echo $indice; ?>:</h2>
    <p><?php echo $importe[$indice]; ?></p>
</body>
</html>