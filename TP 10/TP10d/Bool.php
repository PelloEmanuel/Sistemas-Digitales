<!DOCTYPE html>
<html>
<head>
    <title>Elemento de un Array de Booleanos</title>
</head>
<body>
<?php
$confirmado = array(true, false, true, false, true, false);

$indice = 0;
?>

    <h2>Elemento con índice <?php echo $indice; ?>:</h2>
    <p><?php echo $confirmado[$indice] ? 'Verdadero' : 'Falso'; ?></p>
</body>
</html>