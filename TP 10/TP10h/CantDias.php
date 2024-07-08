<!DOCTYPE html>
<html>
<head>
    <title>Cantidad de días por mes</title>
</head>
<body>
    <?php
    $dias_por_mes = array(
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 31,
        "Septiembre" => 30,
        "Octubre" => 31,
        "Noviembre" => 30,
        "Diciembre" => 31
    );
    ?>

    <h3>Cantidad de días de cada mes:</h3>
    <ul>
        <?php foreach ($dias_por_mes as $mes => $dias): ?>
            <li>El mes de <?php echo $mes; ?> tiene <?php echo $dias; ?> días.</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>